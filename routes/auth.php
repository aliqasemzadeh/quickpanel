<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', \App\Livewire\Guest\Auth\Login::class)->name('login');
Route::get('/logout', \App\Livewire\Guest\Auth\Logout::class)->name('register');

Route::get('/guest/auth/google/redirect', [\App\Http\Controllers\Guest\Auth\GoogleController::class, 'redirectToGoogle'])->name('auth.google.redirect');
Route::get('/guest/auth/google/callback', [\App\Http\Controllers\Guest\Auth\GoogleController::class, 'handleGoogleCallbackW'])->name('auth.google.callback');
