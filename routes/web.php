<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GedungController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/profil', function () {
    return view('profil.profil');
})->name('profil');

Route::get('/toilet-gedung-h', function () {
    return view('gedungH.gedungh');
})->name('gedungh');

// routes/web.php or routes/api.php
// routes/web.php
//Route::get('/gedungh/history', 'GedungController@showHistory')->name('gedungh.history');
//Route::get('/gedungh/history', [GedungController::class, 'showHistory']);
