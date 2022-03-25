<?php

use App\Http\Controllers\WebsitePagesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return to_route('website.home');
});
Route::prefix('webiste')->name('website.')->group(function () {
    Route::get('/', [WebsitePagesController::class, 'homePage'])->name("home");
    Route::get('/about', [WebsitePagesController::class, 'aboutPage'])->name("about");
    Route::get('/contacts', [WebsitePagesController::class, 'contactsPage'])->name("contacts");
    Route::get('/our_home', [WebsitePagesController::class, 'ourHomePage'])->name("our_home");
    Route::get('/recepies', [WebsitePagesController::class, 'recepiesPage'])->name("recepies");
});