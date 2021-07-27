<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index']);
//Route::get('/products', [IndexController::class, 'getProducts']);
Route::get('/product/{product}', [IndexController::class, 'showProduct']);
Route::get('/users', [UserController::class, 'showUsers']);
Route::get('/recentlyviewedproducts/{user}', [UserController::class, 'recentlyViewedProductsByUser']);