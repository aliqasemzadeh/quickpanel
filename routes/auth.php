<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', \App\Livewire\Guest\Auth\Login::class)->name('login');
Route::get('/logout', \App\Livewire\Guest\Auth\Logout::class)->name('logout');
Route::get('/register', \App\Livewire\Guest\Auth\Register::class)->name('register');

Route::get('/guest/auth/google/redirect', [\App\Http\Controllers\Guest\Auth\GoogleController::class, 'redirectToGoogle'])->name('auth.google.redirect');
Route::any('/guest/auth/google/callback', [\App\Http\Controllers\Guest\Auth\GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::get('/guest/auth/github/redirect', [\App\Http\Controllers\Guest\Auth\GithubController::class, 'redirectToGithub'])->name('auth.github.redirect');
Route::any('/guest/auth/github/callback', [\App\Http\Controllers\Guest\Auth\GithubController::class, 'handleGithubCallback'])->name('auth.github.callback');
