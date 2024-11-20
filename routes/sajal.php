<?php

use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard/')->name('dashboard.')->group(function () {
    Route::resource('module', ModuleController::class);
});

Route::get('text-route', function () {
    Artisan::call("livewire:make test");
    return "Model Test with migration, controller, resource, and policy created.";
});
