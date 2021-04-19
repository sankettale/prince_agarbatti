<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Session;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});
Route::view("/","front_end.index");
Route::view("/register","front_end.register");
Route::view("/contact","front_end.contact");
Route::post("register",[UserController::class,'register']);
Route::post("/login",[UserController::class,'login']);
Route::post("add_to_cart",[ProductController::class,'addtocart']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("/",[ProductController::class,'banner']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::get("myorder",[ProductController::class,'myOrder']);
Route::get("my_details",[UserController::class,'my_details']);
// Route::view("/my_details","front_end.my_details");


// Admin Route
Route::view("/adminlogin","admin.adminlogin");
Route::view("/adminregister","admin.adminregister");
// Route::view("/dashboard","admin.dashboard");
Route::view("/add_banner","admin.add_banner");
Route::view("/add_product","admin.add_product");
// Route::view("/setting","admin.setting");
Route::post("adminregister",[AdminController::class,'adminregister']);
Route::post("adminlogin",[AdminController::class,'adminlogin']);
Route::get('/adminlogout', function () {
    Session::forget('admin');
    return redirect('/adminlogin');
});
Route::get("banner_list",[BannerController::class,'index']);
Route::post('add_banner', [BannerController::class,'store']);
Route::get("edit_banner/{id}",[BannerController::class,'edit']);
Route::post('edit_banner/{id}', [BannerController::class,'update']);
Route::get('delete_banner/{id}', [BannerController::class,'destroy']);
Route::post('add_product', [ProductController::class,'add_product']);
Route::get("product_list", [ProductController::class,'show_product']);
Route::get("edit_product/{id}",[ProductController::class,'product_edit']);
Route::post("edit_product/{id}",[ProductController::class,'product_update']);
Route::get('delete_product/{id}', [ProductController::class,'product_destroy']);
Route::get("customer_details",[ProductController::class,'customer_details']);
Route::get("dashboard",[UserController::class,'showcount']);
Route::get("setting",[AdminController::class,'setting']);
Route::post("updatesetting",[AdminController::class,'updatesetting']);
