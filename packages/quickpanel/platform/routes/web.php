<?php
use Illuminate\Support\Facades\Route;

Route::get('/', QuickPanel\Platform\Livewire\Front\Home\Index::class)->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard/index', QuickPanel\Platform\Livewire\User\Dashboard\Index::class)->name('user.dashboard.index');
    Route::get('/user/setting/profile/index', QuickPanel\Platform\Livewire\User\Setting\Profile\Index::class)->name('user.setting.profile.index');
    Route::get('/user/setting/password/index', QuickPanel\Platform\Livewire\User\Setting\Password\Index::class)->name('user.setting.password.index');

    Route::group(['middleware' => [\QuickPanel\Platform\Http\Middleware\AdministratorAccessMiddleware::class]], function () {
        Route::get('/administrator/dashboard/index', QuickPanel\Platform\Livewire\Administrator\Dashboard\Index::class)->name('administrator.dashboard.index');
        Route::get('/administrator/user-management/admin/index', QuickPanel\Platform\Livewire\Administrator\UserManagement\Admin\Index::class)->name('administrator.user-management.admin.index');
        Route::get('/administrator/user-management/user/index', QuickPanel\Platform\Livewire\Administrator\UserManagement\User\Index::class)->name('administrator.user-management.user.index');
        Route::get('/administrator/user-management/role/index', QuickPanel\Platform\Livewire\Administrator\UserManagement\Role\Index::class)->name('administrator.user-management.role.index');
        Route::get('/administrator/user-management/permission/index', QuickPanel\Platform\Livewire\Administrator\UserManagement\Permission\Index::class)->name('administrator.user-management.permission.index');

        Route::get('/administrator/setting-management/option/index', QuickPanel\Platform\Livewire\Administrator\SettingManagement\Option\Index::class)->name('administrator.setting-management.option.index');
        Route::get('/administrator/setting-management/function/index', QuickPanel\Platform\Livewire\Administrator\SettingManagement\Function\Index::class)->name('administrator.setting-management.function.index');
    });

});
