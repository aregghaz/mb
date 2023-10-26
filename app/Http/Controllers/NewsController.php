<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($limit)
    {
       $data = News::limit($limit)->get();

        return response()->json([
          "data" => $data,
          "status" => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $news = new News();
        $news->title= $request->title;
        $news->description= $request->description;
        $news->image= $request->image;
        $news->save();

        return response()->json([
          "status" => 200,
        ], 200);
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
    public function show(News $news,$id)
    {

        $data = News::where("id" , $id)->limit(1)->get();
                return response()->json([
                  "data" => count($data) > 0 ? $data[0] : [],
                  "status" => 200,
                ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news,$id)
    {
        $news =  News::where('id', $id)->limit(1)->get();
                $news->title= $request->title;
                $news->description= $request->description;
                $news->image= $request->image;
                $news->update();

                return response()->json([
                  "status" => 200,
                ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news,$id)
    {
         $news =  News::where('id', $id)->limit(1)->delete();
            return response()->json([
                           "status" => 200,
                         ], 200);
    }
}
