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
            $fileName = $this->unique_code(9).'.'.$request->file("featured_image")->extension();  
            $product->featured_image = $request->file("featured_image")->storeAs("products/featured", $fileName, "public");
        }

        if ($request->hasFile("product_image_transparent")) {
            $fileName = $this->unique_code(9).'.'.$request->file("product_image_transparent")->extension();  
            $product->product_image_transparent = $request->file("product_image_transparent")->storeAs("products/transparent", $fileName, "public");;
        }

        if ($request->hasFile("background_texture")) {
            $fileName = $this->unique_code(9).'.'.$request->file("background_texture")->extension();  
            $product->background_texture =$request->file("background_texture")->storeAs("products/texture", $fileName, "public");;
        }

        if ($request->hasFile("background_color")) {
            $fileName = $this->unique_code(9).'.'.$request->file("background_color")->extension();  
            $product->background_color = $request->file("background_color")->storeAs("products/background", $fileName, "public");
        }

        if ($request->hasFile("featured_meal_picture")) {
            $fileName = $this->unique_code(9).'.'.$request->file("featured_meal_picture")->extension();  
            $product->featured_meal_picture = $request->file("featured_meal_picture")->storeAs("products/meal", $fileName, "public");
        }

        if ($request->hasFile("picture_one")) {
            $fileName = $this->unique_code(9).'.'.$request->file("picture_one")->extension();  
            $product_name = $product->name;
            $product->picture_one = $request->file("picture_one")->storeAs("products/$product_name/slides", $fileName, "public");
        }

        if ($request->hasFile("picture_two")) {
            $fileName = $this->unique_code(9).'.'.$request->file("picture_two")->extension();  
            $product_name = $product->name;
            $product->picture_two = $request->file("picture_two")->storeAs("products/$product_name/slides", $fileName, "public");;
        }

        if ($request->hasFile("picture_three")) {
            $fileName = $this->unique_code(9).'.'.$request->file("picture_three")->extension();  
            $product_name = $product->name;
            $product->picture_three = $request->file("picture_three")->storeAs("products/$product_name/slides", $fileName, "public");
        }

        if ($request->hasFile("picture_four")) {
            $fileName = $this->unique_code(9).'.'.$request->file("picture_four")->extension();  
            $product_name = $product->name;
            $product->picture_four = $request->file("picture_four")->storeAs("products/$product_name/slides", $fileName, "public");;
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
            $fileName1 = $this->unique_code(9).'.'.$request->file("featured_image")->extension();  
            $product->featured_image = $request->file("featured_image")->storeAs("products/featured", $fileName1, "public");
        }

        if ($request->hasFile("product_image_transparent")) {
            $fileName2 = $this->unique_code(9).'.'.$request->file("product_image_transparent")->extension();  
            $product->product_image_transparent = $request->file("product_image_transparent")->storeAs("products/featured", $fileName2, "public");
        }

        if ($request->hasFile("background_texture")) {
            $fileName3 = $this->unique_code(9).'.'.$request->file("background_texture")->extension();  
            $product->background_texture = $request->file("background_texture")->storeAs("products/featured", $fileName3, "public");
        }

        if ($request->hasFile("background_color")) {
            $fileName4 = $this->unique_code(9).'.'.$request->file("background_color")->extension();  
            $product->background_color = $request->file("background_color")->storeAs("products/featured", $fileName4, "public");
        }

        if ($request->hasFile("featured_meal_picture")) {
            $fileName5 = $this->unique_code(9).'.'.$request->file("featured_meal_picture")->extension();  
            $product->featured_meal_picture = $request->file("featured_meal_picture")->storeAs("products/featured", $fileName5, "public");
        }

        $product_name = $product->name;

        if ($request->hasFile("picture_one")) {
            $fileName6 = $this->unique_code(9).'.'.$request->file("picture_one")->extension();  
            $product->picture_one = $request->file("picture_one")->storeAs("products/$product_name/slides", $fileName6, "public");
        }

        if ($request->hasFile("picture_two")) {
            $fileName7 = $this->unique_code(9).'.'.$request->file("picture_two")->extension();  
            $product->picture_two = $request->file("picture_two")->storeAs("products/$product_name/slides", $fileName7, "public");
        }

        if ($request->hasFile("picture_three")) {
            $fileName8 = $this->unique_code(9).'.'.$request->file("picture_three")->extension();  
            $product->picture_three =$request->file("picture_three")->storeAs("products/$product_name/slides", $fileName8, "public");
        }

        if ($request->hasFile("picture_four")) {
            $fileName9 = $this->unique_code(9).'.'.$request->file("picture_four")->extension();  
            $product->picture_four = $request->file("picture_four")->storeAs("products/$product_name/slides", $fileName9, "public");
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

    private function unique_code($limit)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }
}
