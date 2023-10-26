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
                  "data" => $data,
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
                                 $event = new Events();
                                 $event->title= $request->title;
                                 $event->description= $request->description;
                                 $event->start_date= $request->start_date;
                                 $event->save();

                                 return response()->json([
                                   "status" => 200,
                                 ], 200);

    /**
     * Display the specified resource.
     */
    public function show(Events $events, $id)
    {

        $data = Events::where("id" , $id)->limit(1)->get();
                return response()->json([
                  "data" => count($data) > 0 ? $data[0] : [],
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
    public function update(Request $request, Events $events,$id)
    {
        $event =  Events::where('id', $id)->limit(1)->get();
                      $event->title= $request->title;
                      $event->description= $request->description;
                      $event->image= $request->image;
                      $event->update();

                      return response()->json([
                        "status" => 200,
                      ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events,$id)
    {
           $news =  News::where('id', $id)->limit(1)->delete();
                    return response()->json([
                                   "status" => 200,
                                 ], 200);
    }
}
