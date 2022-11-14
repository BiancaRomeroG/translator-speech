<?php

use App\Http\Controllers\DocumentTranslatorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('/traductor', 'traducir.texto')->name('traducir.texto');

    # Start Route Document Translator
    Route::get('/document-translator', [DocumentTranslatorController::class, 'index'])->name('document-translator');
    # End Route Document Trasnlator
});
