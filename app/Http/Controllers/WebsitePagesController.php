<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsitePagesController extends Controller
{
    //
    public function homePage() {
        $products = Product::all();
        $meals = Meal::all();
        return view("website.home", compact("meals", "products"));
    }

    public function aboutPage() {
        return view("website.about");
    }

    public function contactsPage() {
        return view("website.contacts");
    }

    public function ourHomePage(){
        return view("website.our_home");
    }
    public function recepiesPage(){
        return view("website.recepies");
    }
    public function hotSaucesPage(Request $request){
        return view("website.hot_sauces");
    }
    public function saucePage(Request $request, Product $product){
        return view("website.sauce", compact("product"));
    }
    public function mealPage(Request $request, Meal $meal){
        return view("website.meal", compact("meal"));
    }
}
