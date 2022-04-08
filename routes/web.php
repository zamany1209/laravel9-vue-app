<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/11', function () {
    return view('h');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/products', function () {
    return view('index');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/profile', function () {
    // Only authenticated users may access this route...
    return view('user');
})->middleware('auth');
Route::post('data-user/', [UserController::class,'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::view('/{any}', 'index')
//     ->middleware('auth')
//     ->where('any', '.*');
