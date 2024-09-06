<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class MenuController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        Gate::authorize('view', [User::class, Menu::class]);
        return view("menu.index");
    }

    /**
     * Display a listing of the data table resource.
     */
    public function displayListDatatable() {
        Gate::authorize('view', [User::class, Menu::class]);

        $menu = Cache::remember('name_list', 60 * 60, function () {
            return Menu::get();
        });
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        Gate::authorize('create', [User::class, Menu::class]);
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
        Gate::authorize('create', [User::class, Menu::class]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu) {
        //
        Gate::authorize('view', [User::class, Menu::class]);
        return view('menu.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu) {
        Gate::authorize('update', [User::class, Menu::class]);
        return view('menu.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu) {
        Gate::authorize('update', [User::class, Menu::class]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu) {
        Gate::authorize('delete', [User::class, Menu::class]);
    }
}
