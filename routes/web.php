<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuiSuisJeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('qui-suis-je', [QuiSuisJeController::class, 'show'])->name('qui-suis-je');
