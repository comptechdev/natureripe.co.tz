<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $meals = Meal::latest()->paginate();
        return view("resources.meals.index", compact("meals"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("resources.meals.form");
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
        //
        $request->validate([
            "name" => "required",
            "featured_image" => "image",
        ]);

        DB::beginTransaction();
        $meal = Meal::create(array_merge($request->input()));

        if ($request->hasFile("featured_image")) {
            $fileName = time().'.'.$request->file("featured_image")->extension();  
            $path = $request->file("featured_image")->storeAs("meals/featured", $fileName, "public");
            $meal->featured_image = $path;
            $meal->save();
        }
        DB::commit();

        $request->flash("status", "Meal Created Successfull");

        return redirect(route("resources.meals.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
        return view("resources.meals.show", compact("meal"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
        return view("resources.meals.form", compact("meal"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        //
        $request->validate([
            "name" => "required",
            "featured_image" => "image",
        ]);

        DB::beginTransaction();
        $meal->update(array_merge($request->input()));

        if ($request->hasFile("featured_image")) {
            $fileName = time().'.'.$request->file("featured_image")->extension();  
            $path = $request->file("featured_image")->storeAs("meals/featured", $fileName, "public");
            $meal->featured_image = $path;
            $meal->save();
        }
        DB::commit();

        $request->flash("status", "Meal Updated Successfull");

        return redirect(route("resources.meals.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        //
        $meal->delete();
        return redirect(route("resources.meals.index"));
    }
}
