<?php

// module

use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard/')->name('dashboard.')->group(function () {
    Route::resource('module', ModuleController::class);
});
// test route

// Route::get('text-route', function () {
//     Artisan::call("make:model Test -mcrR --policy");
//     return "Model Test with migration, controller, resource, and policy created.";
// });