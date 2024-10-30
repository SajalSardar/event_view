<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('view',  Event::class);
        return view("event.index");
    }

    /**
     * Display a listing of the data table resource.
     */
    public function displayListDatatable()
    {
        Gate::authorize('view',  Event::class);
        
        $event = Cache::remember('name_list', 60 * 60, function () {
            return Event::get();
        });
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Event::class);
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Gate::authorize('create', Event::class);

    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
        Gate::authorize('view',  $event);
        return view('event.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        Gate::authorize('update', $event);
        return view('event.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        Gate::authorize('update',  $event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        Gate::authorize('delete',  $event);
    }
}
