<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::post('product-list/', [ProductController::class,'index']);
Route::post('product-category-list/', [ProductController::class,'list_product_category']);
Route::post('product-list-category/', [ProductController::class,'category']);
Route::get('list-category/', [ProductController::class,'list_categor']);

