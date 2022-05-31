<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $collections = Collection::all();
        return view("resources.collections.index", compact("collections"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("resources.collections.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => "required",
        ]);

        DB::beginTransaction();
        $collection = Collection::create($request->input());
        $name = $collection->name;
        if ($request->hasFile("featured_image")) {
            $fileName1 = $this->unique_code(9).'.'.$request->file("featured_image")->extension();  
            $collection->featured_image = $request->file("featured_image")->storeAs("collections/$name/featured", $fileName1, "public");
        }
        $collection->save();
        DB::commit();

        return redirect(route("resources.collections.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        //
        return view("resources.collections.show", compact("collection"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        //
        return view("resources.collections.form", compact("collection"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        //
        //
        $request->validate([
            "name" => "required",
        ]);

        DB::beginTransaction();
        $collection->update($request->input());
        $name = $collection->name;
        if ($request->hasFile("featured_image")) {
            $fileName1 = $this->unique_code(9).'.'.$request->file("featured_image")->extension();  
            $collection->featured_image = $request->file("featured_image")->storeAs("collections/$name/featured", $fileName1, "public");
        }
        $collection->save();
        DB::commit();

        return redirect(route("resources.collections.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        //
        $collection->delete();
        return redirect(route("resources.collections.index"));
    }
}
