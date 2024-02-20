<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;

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

//--User Login--//
Route::get('/userlogin',[UserController::class,'UserLogin']);
Route::get('/userreg',[UserController::class,'UserRegister']);
Route::post('/reg_user',[UserController::class,'PostUser']);

//--Admin Login--//
Route::get('/adminlogin',[AdminController::class,'AdminLogin']);
Route::post('/adm_login',[AdminController::class,'AdminLog']);

//--Manager Login--//
Route::get('/managerlogin',[ManagerController::class,'ManagerLogin']);

//--User Pages--//
Route::get('/index',[UserController::class,'Index']);
Route::get('/about',[UserController::class,'About']);
Route::get('/contact',[UserController::class,'Contact']);
Route::get('/shop',[UserController::class,'Shop']);
Route::get('/single_product/{id}',[UserController::class,'SingleProduct']);
Route::get('/cart',[UserController::class,'Cart']);
Route::get('/checkout',[UserController::class,'CheckOut']);
Route::get('/portfolio',[UserController::class,'Portfolio']);


//--add Product pages--//
Route::get('/master',[AdminController::class,'AdMaster']);

//--Category--//
Route::get('/addcategory',[AdminController::class,'AddCategory']);
Route::post('/add_cate',[AdminController::class,'PostCategory']);

//--Product--//
Route::get('/addproduct',[AdminController::class,'AddProduct']);
Route::post('/add_prod',[AdminController::class,'PostProduct']);

//--Product-Image--//
Route::get('/productimg',[AdminController::class,'ProductImage']);
Route::post('/post_productimg',[AdminController::class,'PostProductImg']);

//--Product-Features--//
Route::get('/productfeat',[AdminController::class,'ProductFeatures']);
Route::post('/product_feat',[AdminController::class,'PostProductFeatures']);

//--Product-Box--//
Route::get('/productbox',[AdminController::class,'ProductBox']);
Route::post('/product_box',[AdminController::class,'PostProductBox']);
