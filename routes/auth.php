<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', \App\Livewire\Guest\Auth\Login::class)->name('login');
Route::get('/logout', \App\Livewire\Guest\Auth\Logout::class)->name('register');
