<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::latest()->paginate();
        return view("resources.products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("resources.products.form");
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
            "featured_image" => "image",
        ]);

        DB::beginTransaction();
        $product = Product::create(array_merge($request->input()));

        if ($request->hasFile("featured_image")) {
            $fileName = time().'.'.$request->file("featured_image")->extension();  
            $path = $request->file("featured_image")->storeAs("products/featured", $fileName, "public");
            $product->featured_image = $path;
        }

        if ($request->hasFile("product_image_transparent")) {
            $fileName = time().'.'.$request->file("product_image_transparent")->extension();  
            $path = $request->file("product_image_transparent")->storeAs("products/featured", $fileName, "public");
            $product->product_image_transparent = $path;
        }

        if ($request->hasFile("background_texture")) {
            $fileName = time().'.'.$request->file("background_texture")->extension();  
            $path = $request->file("background_texture")->storeAs("products/featured", $fileName, "public");
            $product->background_texture = $path;
        }

        if ($request->hasFile("background_color")) {
            $fileName = time().'.'.$request->file("background_color")->extension();  
            $path = $request->file("background_color")->storeAs("products/featured", $fileName, "public");
            $product->background_color = $path;
        }

        if ($request->hasFile("featured_meal_picture")) {
            $fileName = time().'.'.$request->file("featured_meal_picture")->extension();  
            $path = $request->file("featured_meal_picture")->storeAs("products/featured", $fileName, "public");
            $product->featured_meal_picture = $path;
        }
        $product->save();
        DB::commit();

        $request->flash("status", "Product Created Successfull");

        return redirect(route("resources.products.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view("resources.products.show", compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view("resources.products.form", compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
         $request->validate([
            "name" => "required",
            "featured_image" => "image",
        ]);

        DB::beginTransaction();
        $product->update($request->input());

        if ($request->hasFile("featured_image")) {
            $fileName = time().'.'.$request->file("featured_image")->extension();  
            $path = $request->file("featured_image")->storeAs("products/featured", $fileName, "public");
            $product->featured_image = $path;
        }

        if ($request->hasFile("product_image_transparent")) {
            $fileName = time().'.'.$request->file("product_image_transparent")->extension();  
            $path = $request->file("product_image_transparent")->storeAs("products/featured", $fileName, "public");
            $product->product_image_transparent = $path;
        }

        if ($request->hasFile("background_texture")) {
            $fileName = time().'.'.$request->file("background_texture")->extension();  
            $path = $request->file("background_texture")->storeAs("products/featured", $fileName, "public");
            $product->background_texture = $path;
        }

        if ($request->hasFile("background_color")) {
            $fileName = time().'.'.$request->file("background_color")->extension();  
            $path = $request->file("background_color")->storeAs("products/featured", $fileName, "public");
            $product->background_color = $path;
        }

        if ($request->hasFile("featured_meal_picture")) {
            $fileName = time().'.'.$request->file("featured_meal_picture")->extension();  
            $path = $request->file("featured_meal_picture")->storeAs("products/featured", $fileName, "public");
            $product->featured_meal_picture = $path;
        }
        $product->save();
        DB::commit();

        $request->flash("status", "Product Updated Successfull");

        return redirect(route("resources.products.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect(route("resources.products.index"));
    }
}
