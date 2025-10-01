<?php
use Illuminate\Support\Facades\Route;

Route::get('/', QuickPanel\Platform\Livewire\Front\Home\Index::class)->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard/index', QuickPanel\Platform\Livewire\User\Dashboard\Index::class)->name('user.dashboard.index');
    Route::get('/user/setting/profile/index', QuickPanel\Platform\Livewire\User\Setting\Profile\Index::class)->name('user.setting.profile.index');
    Route::get('/user/setting/password/index', QuickPanel\Platform\Livewire\User\Setting\Password\Index::class)->name('user.setting.password.index');
});
