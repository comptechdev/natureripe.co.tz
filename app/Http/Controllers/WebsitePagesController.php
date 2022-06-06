<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Group;
use App\Models\Meal;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsitePagesController extends Controller
{
    //
    public function homePage() {
        $products = Product::all();
        $meals = Meal::all();
        $collections = Collection::all();
        return view("website.home", compact("meals", "products", "collections"));
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
        $sauces = Product::where("group_id", 5)->get();
        // $groups = [];
        $groups = Group::where("id", "!=", 5)->get();
        return view("website.recepies", compact("sauces","groups"));
    }
    public function mealsPage(){
        $collections = Collection::all();
        return view("website.meals", compact("collections"));
    }
    public function SaucesPage(Request $request){
        return view("website.sauces");
    }
    public function historyPage(Request $request){
        return view("website.history");
    }
    
    public function saucePage(Request $request, Product $product){
        return view("website.sauce", compact("product"));
    }
    public function mealPage(Request $request, Meal $meal){
        return view("website.meal", compact("meal"));
    }
}
