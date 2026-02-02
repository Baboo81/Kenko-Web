<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuiSuisJeController;
use Illuminate\Support\Facades\Route;

/********************/
/* Routes globales */
/*******************/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('qui-suis-je', [QuiSuisJeController::class, 'show'])->name('qui-suis-je');
Route::get('contact', [ContactController::class, 'show'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('faq', [FaqController::class, 'show'])->name('faq');

/***********/
/* Cookies */
/***********/
Route::view('/cookies', 'cookies.cookies-policy')->name('cookies-policy');
