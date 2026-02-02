<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show(): View
    {
        /**
         * On récupère les datas depuis le fichier : App/Data/contact.php
         */
        $contactData = require app_path('Data/contact.php');
        /**
         * On retourne la vue contact
         */
        return view('contact', compact('contactData'));
    }

    //Traitement du formulaire
    public function send(Request $request)
    {
        //HoneyPot (anti-spam)
        if ($request->filled('website')) {
            return back()->with('error', 'Spam détecté !');
        }

        //Validation des champs
        $validated = $request->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string'],
        ]);

        //Nettoyage XSS
        $validated['message'] = strip_tags($validated['message']);

        //Enregistrement ds la DB avec protection SQL injection
        Contact::create($validated);

        //Envoi du mail
        Mail::send('email.contact', [
            'lastname' => $validated['lastname'],
            'firstname' => $validated['firstname'],
            'email' => $validated['email'],
            'user_message' => $validated['message'],
        ], function ($mail) use ($validated) {
            $mail->to('info@kenko-web.be')
                 ->subject('Nouveau message - Kenko-Web')
                 ->replyTo($validated['email'], $validated['firstname'] . ' ' . $validated['lastname']);
        });

        //Redirection avec un msg flash
        return back()->with('success', 'Merci pour votre message, je vous répondrai rapidement ');
    }
}
