<?php

use App\Http\Controllers\ProductController;
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
    Route::get('/contacts', [WebsitePagesController::class, 'contactsPage'])->name("contacts");
    Route::get('/our_home', [WebsitePagesController::class, 'ourHomePage'])->name("our_home");
    Route::get('/recepies', [WebsitePagesController::class, 'recepiesPage'])->name("recepies");
    Route::get('/hot_sauces', [WebsitePagesController::class, 'hotSaucesPage'])->name("hot_sauces");
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->prefix("resources")->name("resources.")->group(function () {
    Route::resource("products", ProductController::class);
    // Route::resource("meals", []);
});