<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

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
}
