<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Front\Home\Index::class)->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard/index', App\Livewire\User\Dashboard\Index::class)->name('user.dashboard.index');
    Route::get('/admin/dashboard/index', App\Livewire\Admin\Dashboard\Index::class)->name('admin.dashboard.index');
    Route::get('/admin/user-management/user/index', App\Livewire\Admin\UserManagement\User\Index::class)->name('admin.user-management.user.index');
});

require_once __DIR__.'/auth.php';
