<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GedeController;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/gede', [GedeController::class, 'index']);

require __DIR__.'/settings.php';
