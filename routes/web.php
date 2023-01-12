<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NFTController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', [CategoryController::class, 'viewHome']);

Route::resource('user', UserController::class);

Route::resource('transaction', TransactionController::class);

Route::resource('nft', NFTController::class);

Route::get('/login', [UserController::class, 'viewLogin']);

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'viewRegister']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/rankings', [UserController::class, 'viewRankings']);

Route::get('/profile', [UserController::class, 'viewProfile']);

Route::get('/edit-profile', [UserController::class, 'viewEditProfile']);

Route::patch('/edit-profile', [UserController::class, 'editProfile']);

Route::get('/explore', [NFTController::class, 'viewExplore']);
