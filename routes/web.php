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
//
Route::get('/', function () {
    return view('auth.login');
});

//Route::get("/home", function () {
//    return view("welcome");
//})->middleware("auth", "verified");

Route::middleware(["auth", "verified"])
    ->group(function () {
    Route::get("/home", [LoanAppController::class, "index"])->name("loan.index");
    Route::get("/loan-app/create", [LoanAppController::class, "create"])->name("loan.create");
    Route::post("/loan-app/store", [LoanAppController::class, "store"])->name("loan.store");
    Route::get("/loan-app/edit/{id}", [LoanAppController::class, "edit"])->name("loan.edit");
    Route::post("/loan-app/update/{id}", [LoanAppController::class, "update"])->name("loan.update");
    Route::get("/loan-app/destroy/{id}", [LoanAppController::class, "destroy"])->name("loan.destroy");
    Route::get("/loan-app/show/{id}",[LoanAppController::class, "show"])->name("loan.show");


    Route::middleware("isbm")->group(function () {
        Route::get("/loan-app/admin/review", [LoanAppController::class, "review_list"])->name("loan.review.index");
        Route::get("/loan-app/admin/show/{id}",[LoanAppController::class, "show"])->name("loan.review.show");
        Route::post("/loan-app/admin/update/{id}", [LoanAppController::class, "review_update"])->name("loan.review.update");
    });
});


