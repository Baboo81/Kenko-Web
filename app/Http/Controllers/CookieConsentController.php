<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CookieConsent;

class CookieConsentController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'consent'   => 'required|in:accepted,refused',
                'page'      => 'nullable|string|max:255',
                'referrer'  => 'nullable|string|max:255',
            ]);

            $consent = CookieConsent::create([
                'consent'     => $request->consent,
                'ip_address'  => $request->ip(),
                'user_agent'  => $request->header('User-Agent'),
                'page'        => $request->page,
                'referrer'    => $request->referrer,
            ]);

            return response()->json(['status' => 'ok', 'id' => $consent->id]);

        } catch (\Exception $e) {
            // Retourne l’erreur pour débogage côté navigateur
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
