<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($limit)
    {
              $data = Events::limit($limit)->get();

                return response()->json([
                  "news" => $data,
                  "status" => 200,
                ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Events $events, $id)
    {

        $data = Events::where("id" , $id)->limit(1)->get();
                return response()->json([
                  "news" => count($data) > 0 ? $data[0] : [],
                  "status" => 200,
                ], 200);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events)
    {
        //
    }
}
