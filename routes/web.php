<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Middleware\Authenticate;
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
Route::get('/', [ProductsController::class, 'index']);

Route::post('/product/save', [ProductsController::class, 'store']);

Route::post('/product/save/{id}', [ProductsController::class, 'update']);

Route::get('/product/remove/{id}', [ProductsController::class, 'delete']);

Route::get('/product/{id}', [ProductsController::class, 'find']);

Route::get('/product', [ProductsController::class, 'create']);
