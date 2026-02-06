<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CookieConsent;

class CookieConsentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'consent' => 'required|in:accepted,refused'
        ]);

        CookieConsent::create([
            'consent' => $request->consent,
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent')
        ]);

        return response()->json(['status' => 'ok']);
    }
}
