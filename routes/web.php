<?php

use App\Http\Controllers\DocumentTranslatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');


// Route::view('/pricing', 'landing.pricing');
// Route::view('/services', 'landing.services');
// Route::view('/about', 'landing.about');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    # Start Route Home
    Route::get('/dashboard', [HomeController::class, 'home'])->name('dashboard');
    # End Route Home

    // Route::view('/traductor', 'traducir.texto')->name('traducir.texto');
    Route::get('/traductor', [HomeController::class, 'traducir_texto'])->name('traducir.texto');

  
    # Start Route Document Translator
    Route::get('/document-translator', [DocumentTranslatorController::class, 'index'])->name('document-translator');
    # End Route Document Trasnlator


    # Start Route Payment with Stripe
    Route::get('plans/checkout/{planId}', [SubscriptionController::class, 'checkout'])->name('plans.checkout');
    Route::post('plans/process', [SubscriptionController::class, 'processPlan'])->name('plan.process');
    Route::get('subscriptions/all', [SubscriptionController::class, 'allSubscriptions'])->name('subscription.all');
    Route::get('invoice', [InvoiceController::class, 'index'])->name('invoice.index');
    # End Route Payment with Stripe
});
