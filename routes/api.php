<?php

use App\Http\Controllers\APIAllUserController;
use App\Http\Controllers\ApiCourierController;
use App\Http\Controllers\APICustomerController;
use App\Http\Controllers\ApiManagerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//GET USER
Route::get('/alluser/get',[APIAllUserController::class,'getUsers'])->middleware("AuthUser");
Route::get('/user/get/{email}',[APIAllUserController::class,'getUser']);

//LOGIN
Route::post('/login',[APIAllUserController::class,'login']);
//LOGOUT
Route::post('/logout',[APIAllUserController::class,'logout']);

//CREATE USER
Route::post('/user/create',[APIAllUserController::class,'createUser']);


//courier
Route::get('/courier/orders',[ApiCourierController::class,'orderView']);

//CUSTOMER --->AYESHA
Route::get('/customer/home',[APICustomerController::class,'home'])->middleware("AuthUser");
Route::get('/customer/medlist',[APICustomerController::class,'showMed'])->middleware("AuthUser");
Route::post('/customer/add/cart',[APICustomerController::class,'addToCart'])->middleware("AuthUser");
Route::get('/customer/cart',[APICustomerController::class,'showCart'])->middleware("AuthUser");
Route::post('/customer/deleteItem',[APICustomerController::class,'deleteItem'])->middleware("AuthUser");


//MANAGER ---> TONMOY
//homepage
Route::get('/manager/home',[ApiManagerController::class,'homepage']);
//medicine table
Route::get('/manager/medicine',[ApiManagerController::class,'viewMed']);
//user table
Route::get('/manager/user',[ApiManagerController::class,'viewUser']);
//order table
Route::get('/manager/orders',[ApiManagerController::class,'viewOrders']);
//delete medicine
Route::post('/manager/deleteMed',[ApiManagerController::class,'deleteMed']);
//supply table
Route::get('/manager/supply',[ApiManagerController::class,'showSupply']);
//go to cart
Route::get('/manager/cart',[ApiManagerController::class,'showSupply']);
//add item to cart
Route::post('/manager/addItem',[ApiManagerController::class,'addItem']);