<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminUserController;


Route::middleware(['auth', 'locale'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::prefix('user')->name('user.')->group(function () {
            Route::controller(AdminUserController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
            });
        });
    });
});
