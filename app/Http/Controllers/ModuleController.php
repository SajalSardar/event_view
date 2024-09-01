<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class ModuleController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $name  = Str::ucfirst($request->name);
        $guard = $request->guard;

        $module = Module::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        Artisan::call("make:model" . $name . " -mcrR --policy");

        $arrayOfPermissionNames = [
            'view list',
            'view own list',
            'create',
            'update',
            'update own',
            'delete',
            'delete won',
            'restore',
            'restore own',
            'force delete',
            'force delete own',
        ];

        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) use ($guard, $module) {
            return [
                'name'       => $permission,
                'module_id'  => $module->id,
                'guard_name' => $guard,
            ];
        });

        Permission::insert($permissions->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module) {
        //
    }
}
