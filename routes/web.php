<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContractController;

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
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about')->name('about');
    Route::get('/glossaire', 'glossaire')->name('glossaire');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/ressources', 'ressources')->name('ressources');
    // Route::post('/contact', 'send');
});

Route::controller(ContractController::class)->group(function () {
    //Route::get('/', 'index');
    Route::get('/contract', 'contract')->name('contract');
    Route::get('/contracts', 'contracts')->name('contracts');
    Route::get('/contract/view', 'contract_view')->name('contract.view');
    //Route::get('/contact', 'contact')->name('contact');
    //Route::get('/ressources', 'ressources')->name('ressources');
    // Route::post('/contact', 'send');
});

// Route::post('/language', [LanguageController::class, 'changeLang'])->name('language.set');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
