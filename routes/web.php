<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Front\Home\Index::class)->name('home');

require_once __DIR__.'/auth.php';
