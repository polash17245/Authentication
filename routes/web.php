<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
//->name("login.post")
Route::middleware("auth")->group(function (){

    Route::view("/",  "welcome")->name("home");
});


Route::get("/login", [AuthController::class, "login"])->name("login");
Route::post("/login", [AuthController::class, "loginPost"])->name("login.post");
Route::get("/register", [AuthController::class, "register"])->name("register");

Route::post("/register", [AuthController::class, "registerPost"])->name("register.post");
