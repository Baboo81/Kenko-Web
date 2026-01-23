<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class QuiSuisJeController extends Controller
{
    public function show(): View
    {
        /**
         * On récupère les datas depuis le fichier : App/Data/quiSuisJe.php
         */
        $quiSuisJeData = require app_path('Data/quiSuisJe.php');

         /**
         * On retourne la vue avec les datas
         */
        return view('qui-suis-je', compact('quiSuisJeData'));
    }
}
