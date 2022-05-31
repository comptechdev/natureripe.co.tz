<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Meal;
use Illuminate\Http\Request;

class CollectionMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function index(Collection $collection)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function create(Collection $collection)
    {
        //
        $meals = Meal::all();
        return view("resources.collections.meals.form", compact("collection", "meals"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Collection $collection)
    {
        //
        $collection->meals()->sync($request->input("meals"));
        return redirect(route("resources.collections.show", ["collection" => $collection]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection, Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection, Meal $meal)
    {
        //
        $meals = Meal::all();
        return view("resources.collections.meals.form", compact("collection", "meals"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection  $collection
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection  $collection
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection, Meal $meal)
    {
        //
    }
}
