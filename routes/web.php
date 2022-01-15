<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanAppController;

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
    return view('welcome');
});

//Route::get("/home", function () {
//    return view("welcome");
//})->middleware("auth", "verified");

Route::get("/loan-app", [LoanAppController::class, "index"])->name("loan.index");
Route::get("/loan-app/create", [LoanAppController::class, "create"])->name("loan.create");
Route::post("/loan-app/store", [LoanAppController::class, "store"])->name("loan.store");
