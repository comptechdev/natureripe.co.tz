<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Product;
use App\Models\ProductMeal;
use Illuminate\Http\Request;

class ProductMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Meal $meal)
    {
        //
        $products = Product::all();
        return view("resources.meals.products.form", compact("meal", "products"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Meal $meal)
    {
        //
        // dd($request->input());
        $request->validate([
            "product_id" => ["required"],
        ]);

        $path = "";
        if ($request->hasFile("featured_image")) {
            $fileName = time().'.'.$request->file("featured_image")->extension();  
            $id = $meal->meal_id;
            $path = $request->file("featured_image")->storeAs("meals/$id/products", $fileName, "public");
        }

        $product_meal = $meal->products()->attach($request->input("product_id"), [
            "featured_image" => $path,
        ]);

        return redirect(route("resources.meals.show", compact("meal")));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductMeal  $productMeal
     * @return \Illuminate\Http\Response
     */
    public function show(ProductMeal $productMeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductMeal  $productMeal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal, Product $product)
    {
        //
        $products = Product::all();
        return view("resources.meals.products.form", compact("meal", "products", "product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductMeal  $productMeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal, Product $product)
    {
        //
        // dd($request->input());
        $request->validate([
            "product_id" => ["required"],
        ]);

        $productMeal = ProductMeal::where("product_id", $product->id)->where("meal_id", $meal->id)->first();

        $path = "";
        if ($request->hasFile("featured_image")) {
            $fileName = time().'.'.$request->file("featured_image")->extension();  
            $id = $meal->meal_id;
            $path = $request->file("featured_image")->storeAs("meals/$id/products", $fileName, "public");
            $productMeal->featured_image = $path;
        }
        

        $productMeal->product_id = $request->input("product_id");
        $productMeal->save();

        return redirect(route("resources.meals.show", compact("meal")));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductMeal  $productMeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductMeal $productMeal)
    {
        //
    }
}
