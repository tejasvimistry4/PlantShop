<?php

use App\Http\Controllers\ProductApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test',[ProductApiController::class,'test']);
Route::post('getproduct',[ProductApiController::class,'getProduct']);
Route::post('getproduct_image',[ProductApiController::class,'getProduct_Image']);
Route::post('getproduct_feature',[ProductApiController::class,'getProduct_Feature']);

Route::post('getcategory',[ProductApiController::class,'getCategory']);
