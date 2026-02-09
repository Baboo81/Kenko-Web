<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CookieConsentController;
use App\Http\Controllers\CookiesPolicyController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuiSuisJeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
Route::get('/cookies', [CookiesPolicyController::class, 'show'])->name('cookies-policy');
Route::post(
    '/cookie-consent',
    [CookieConsentController::class, 'store']
)->name('cookie-consent.store');
