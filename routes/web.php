<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\vendorcontroller;

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

//ALL USERS

Route::get('/registration',[AllUserController::class,'registration'])->name('user.registration');
Route::post('/registration',[AllUserController::class,'registrationSubmit'])->name('user.registration.submit');

Route::get('/registration/{type}',[AllUserController::class,'register'])->name('user.register');
Route::post('/registration/{type}',[AllUserController::class,'registerSubmit'])->name('user.register.submit');

Route::get('/login',[AllUserController::class,'login'])->name('user.login');
Route::post('/login',[AllUserController::class,'loginSubmit'])->name('user.login.submit');

Route::get('/logout',[AllUserController::class,'logout'])->name('logout');

//CUSTOMER
Route::get('/customer/home',[CustomerController::class,'customerHome'])->name('customer.home');
Route::get('/customer/account/{name}',[CustomerController::class,'customerAccount'])->name('customer.account');

Route::get('/customer/account/modify/{name}',[CustomerController::class,'customerModifyAccount'])->name('customer.modify.account');
Route::post('/customer/account/modify/{name}',[CustomerController::class,'customerModifiedAccount'])->name('customer.modified.account');


//MANAGER
Route::get('/manager/home',[ManagerController::class,'managerHome'])->name('manager.home');
Route::post('/manager/home',[ManagerController::class,'HomeAction'])->name('manager.HomeAction');

Route::get('/manager/table/select',[ManagerController::class,'tableSelect'])->name('manager.tableSelect');
Route::post('/manager/table/select',[ManagerController::class,'viewTable'])->name('manager.tableView');




//vendor
Route::get('/vendor/home',[vendorcontroller::class,'home'])->name('vendor.home');

Route::get('/vendor/profile/edit',[vendorcontroller::class,'editprofile'])->name('vendor.edit.account');
Route::post('/vendor/profile/edit',[vendorcontroller::class,'editedprofile'])->name('vendor.edited.account');

Route::get('/vendor/profile',[vendorcontroller::class,'profile'])->name('vendor.profile');


Route::get('/vendor/contracts',[vendorcontroller::class,'contracts'])->name('vendor.contracts');
Route::get('/vendor/supply',[vendorcontroller::class,'supply'])->name('vendor.supply');
Route::get('/vendor/market',[vendorcontroller::class,'market'])->name('vendor.market');
