<?php

use Illuminate\Support\Facades\Route;
use app\Htpp\controllers\kategoriController;
use app\Htpp\controllers\MenuController;
use app\Htpp\controllers\OrderController;
use app\Htpp\controllers\OrderDetailController;
use app\Htpp\controllers\PelangganController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kategori', kategoriController::class);
Route::resource('menu', kategoriController::class);
Route::resource('order', kategoriController::class);
Route::resource('orderdetail', OrderDetailController::class);
Route::resource('pelanggan', PelangganController::class);
