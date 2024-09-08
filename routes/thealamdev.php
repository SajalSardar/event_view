<?php

// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminUserController;

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'name' => 'admin.'], function () {
    Route::controller(AdminUserController::class)->group(function () {
        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
        });
    });
});
