<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('view',  User::class);
        return view("User.index");
    }

    /**
     * Display a listing of the data table resource.
     */
    public function displayListDatatable()
    {
        Gate::authorize('view',  User::class);

        $User = Cache::remember('name_list', 60 * 60, function () {
            return User::get();
        });
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', User::class);
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Gate::authorize('create', User::class);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
        //
        Gate::authorize('view',  User::class);
        return view('User.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        Gate::authorize('update', User::class);
        return view('User.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $User)
    {
        Gate::authorize('update',  User::class);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        Gate::authorize('delete',  User::class);
    }
}
