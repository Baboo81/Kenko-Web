<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CookiesPolicyController extends Controller
{
    public function show(): View
    {
        /**
        * Récupération des datas depuis : App/Data/cookiesPolicy.php
        */
        $cookiesPolicy = require app_path('Data/cookiesPolicy.php');

        /**
         * On retourne la vue avec les datas
         */
        return view('cookies.cookies-policy', compact('cookiesPolicy'));
    }

}
