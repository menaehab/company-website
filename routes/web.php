<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::name('front.')->group(function () {
    Route::view('/', 'front.index')->name('index');
    Route::view('/about', 'front.about')->name('about');
    Route::view('/service', 'front.service')->name('service');
    Route::view('/contact', 'front.contact')->name('contact');
});

Route::name('admin.')
    ->prefix(LaravelLocalization::setLocale() . '/admin')
    ->middleware(
        ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    )->group(function () {
        Route::view('/', 'admin.index')->name('index');
    });

Route::get(LaravelLocalization::setLocale() . '/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware(
        ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    )
    ->name('login');

Route::post(LaravelLocalization::setLocale() . '/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(
        ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    );

Auth::routes(['register' => 'false']);

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

// Route::get('/', function () {
//     return view('front.index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');