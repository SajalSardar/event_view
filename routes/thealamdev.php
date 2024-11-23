<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\AdminUserController;

Route::prefix('events')->name('event.')->group(function () {
    Route::controller(EventController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::put('update/{event}', 'update')->name('update');
        Route::delete('delete/{event}', 'delete')->name('delete/{event}');
    });
});


Route::middleware(['auth', 'locale'])->prefix('dashboard')->group(function () {
    Route::controller(AdminUserController::class)->prefix('user')->name('user.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::get('edit/{user}', 'edit')->name('edit');
        Route::delete('delete/{user}', 'destroy')->name('delete');
    });
});
