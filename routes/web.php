<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
 
Route::get("/", [HomeController::class, "index"]);
Route::get("/shop", [HomeController::class, "shop"]);
Route::get("/kontakt", [HomeController::class, "kontakt"]);
Route::post("/posaljiupit", [HomeController::class, "posaljiupit"]);

Route::get("/admin", [AdminController::class, "index"]);
Route::post("/admin/dodaj", [AdminController::class, "dodaj"]);
