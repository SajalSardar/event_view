<?php

// module

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\Admin\MenuController;

Route::prefix('dashboard/')->name('dashboard.')->group(function () {
    Route::resource('module', ModuleController::class);
    Route::resource('menu', MenuController::class);
});
// test route

Route::get('text-route', function () {
    Artisan::call("livewire:make test");
    return "Model Test with migration, controller, resource, and policy created.";
});