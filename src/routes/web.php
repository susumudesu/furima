<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
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
Route::get('/', [AuthController::class, 'index']);
Route::get('/', [ProductController::class, 'index']);
Route::get('/', [ProductController::class, 'find']);
Route::get('/item/{itemId}', [ProductController::class, 'show']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [RegisterController::class, 'store']);
Route::middleware('auth')->group(function() {
    Route::get('/mypage/profile', [RegisterController::class, 'index']);
    Route::get('/product/register', [ProductController::class, 'create']);
    Route::post('/product/register', [ProductController::class, 'store']);
    Route::get('/purchase/{itemId}', [PurchaseController::class, 'index']);
    Route::post('/purchase/{itemId}', [PurchaseController::class, 'store']);
    Route::get('/purchase/address/{itemId}', [UserController::class, 'address']);
    Route::post('/purchase/address/{itemId}', [UserController::class, 'addressUpdate']);
    Route::get('/mypage', [UserController::class, 'profile']);
});
Route::post('/logout', [AuthController::class, 'destroy']);
