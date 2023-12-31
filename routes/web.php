<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::resource('Pages', ShopController::class);


Route::get("/", [ShopController::class,"index"]);
Route::get("/cari", [ShopController::class,"cari"]);
Route::get("/show/{id}", [ShopController::class,"show"]);


/*
Route::resource("/",ShopController::class);
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
