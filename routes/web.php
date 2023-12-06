<?php
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

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('home');
});

//MAIN PAGE
Route::get("/home", [HomeController::class, "index"])->name("home");
Route::redirect('/', "home");

//FALLBACK
Route::fallback(function () {
    return redirect()->back();
});

//CHANGE LANGUAGE
Route::get("locale/{id}", function ($locale) {
    Session::put("locale", $locale);
    return redirect()->back();
});
