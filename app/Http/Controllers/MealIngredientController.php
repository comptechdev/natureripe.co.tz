<?php

namespace App\Http\Controllers;

use App\Models\Ingridient;
use App\Models\Meal;
use App\Models\Product;
use Illuminate\Http\Request;

class MealIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function index(Meal $meal)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function create(Meal $meal)
    {
        //
        $products = Product::all();
        return view("resources.meals.ingridients.form", compact("meal", "products"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Meal $meal)
    {
        //
        $request->validate([
            "name" => "required"
        ]);

        $ingridient = $meal->ingridients()->create([
            "name" => $request->input("name"),
            "product_id" => $request->input("product_id")
        ]);

        return redirect(route("resources.meals.show", compact("meal")));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @param  \App\Models\Ingridient  $ingridient
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal, Ingridient $ingridient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @param  \App\Models\Ingridient  $ingridient
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal, Ingridient $ingridient)
    {
        //
        $products = Product::all();
        return view("resources.meals.ingridients.form", compact("meal", "ingridient", "products"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * @param  \App\Models\Ingridient  $ingridient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal, Ingridient $ingridient)
    {
        //
        $request->validate([
            "name" => "required"
        ]);

        $ingridient->update([
            "name" => $request->input("name"),
            "product_id" => $request->input("product_id")
        ]);

        return redirect(route("resources.meals.show", compact("meal")));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @param  \App\Models\Ingridient  $ingridient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal, Ingridient $ingridient)
    {
        //
        $ingridient->delete();
        return redirect(route("resources.meals.show", compact("meal")));
    }
}
