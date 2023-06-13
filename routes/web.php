<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class,'home']);
//Route::get('/home', function () {
 //   return view('dashboard');
//});
//Route::get('/menu', function () {
//    return view('menu');
//});

Route::get('/home', [IndexController::class,'home']);
Route::get('/obat', [IndexController::class,'obat']);
Route::get('/katobat', [IndexController::class,'katobat']);
Route::get('/pemasok', [IndexController::class,'pemasok']);
Route::get('/penjualan', [IndexController::class,'penjualan']);
Route::get('/pembelian', [IndexController::class,'pembelian']);
Route::get('/karyawan', [IndexController::class,'karyawan']);
Route::get('/laporan', [IndexController::class,'laporan']);

Route::get('/login', function () {
    return view('login');
});