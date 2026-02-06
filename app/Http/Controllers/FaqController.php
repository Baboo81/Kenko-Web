<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function show(): View
    {
        /**
        * Récuperation des datas depuis : App/Data/faq.php
        */
        $faqData = require app_path('Data/faq.php');

        /**
         * On retourne la vue avec les datas
         */
        return view('faq', compact('faqData'));
    }

}
