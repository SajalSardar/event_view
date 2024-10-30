<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\EventController;

Route::middleware(['auth', 'locale'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::prefix('user')->name('user.')->group(function () {
            Route::controller(AdminUserController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::get('edit/{user}', 'edit')->name('edit');
                Route::delete('delete/{user}', 'destroy')->name('delete');
            });
        });

        Route::prefix('events')->name('event.')->group(function () {
            Route::controller(EventController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::get('edit/{event}', 'edit')->name('edit');
                Route::delete('delete/{event}', 'destroy')->name('delete');
            });
        });
    });
});
