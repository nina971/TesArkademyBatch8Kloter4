<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

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

Route::get('/', function () {
    return view('v_home');
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/home/about/{id}', [HomeController::class, 'about']);

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/detail/{id_produk}', [ProdukController::class, 'detail']);
Route::get('/produk/add', [ProdukController::class, 'add']);
Route::post('/produk/insert', [ProdukController::class, 'insert']);
Route::get('/produk/edit/{id_produk}', [ProdukController::class, 'edit']);
Route::post('/produk/update/{id_produk}', [ProdukController::class, 'update']);
Route::get('/produk/delete/{id_produk}', [ProdukController::class, 'delete']);