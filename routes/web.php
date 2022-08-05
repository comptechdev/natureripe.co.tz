<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CollectionMealController;
use App\Http\Controllers\CommandsController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\MealIngredientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductMealController;
use App\Http\Controllers\WebsitePagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return to_route('website.home');
});
Route::prefix('webiste')->name('website.')->group(function () {
    Route::get('/', [WebsitePagesController::class, 'homePage'])->name("home");
    Route::get('/about', [WebsitePagesController::class, 'aboutPage'])->name("about");
    Route::get('/galery', [WebsitePagesController::class, 'galeryPage'])->name("galery");
    Route::get('/contacts', [WebsitePagesController::class, 'contactsPage'])->name("contacts");
    Route::get('/our_home', [WebsitePagesController::class, 'ourHomePage'])->name("our_home");
    Route::get('/recepies', [WebsitePagesController::class, 'recepiesPage'])->name("recepies");
    Route::get('/meals', [WebsitePagesController::class, 'mealsPage'])->name("meals");
    Route::get('/sauces', [WebsitePagesController::class, 'saucesPage'])->name("sauces");
    Route::get('/history', [WebsitePagesController::class, 'historyPage'])->name("history");

    Route::get('/sauce/{product}', [WebsitePagesController::class, 'saucePage'])->name("sauce");
    Route::get('/meal/{meal}', [WebsitePagesController::class, 'mealPage'])->name("meal");
});

Route::prefix('commands')->name('commands.')->group(function () {
    Route::get('/migrate', [CommandsController::class, 'migrate'])->name("migrate");
    Route::get('/optimize', [CommandsController::class, 'optimize'])->name("optimize");
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->prefix("resources")->name("resources.")->group(function () {
    Route::resource("products", ProductController::class);
    Route::resource("meals", MealController::class);
    Route::resource("meals.ingridients", MealIngredientController::class);
    Route::resource("meals.products", ProductMealController::class);
    Route::resource("collections", CollectionController::class);
    Route::resource("collections.meals", CollectionMealController::class);
});