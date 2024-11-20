<?php

use App\Http\Controllers\Admin\EventController;
use Illuminate\Support\Facades\Route;

Route::prefix('events')->name('event.')->group(function () {
    Route::controller(EventController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::put('update/{event}', 'update')->name('update');
        Route::delete('delete/{event}', 'delete')->name('delete/{event}');
    });
});
