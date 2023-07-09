<?php

use Illuminate\Support\Facades\{Route,Auth};
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ObatController;
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

// Route::get('/', [IndexController::class,'home']);
// Route::get('/', function () {
//    return view('welcome');
// });
//Route::get('/menu', function () {
//    return view('menu');
//});

Route::get('/dashboard', [IndexController::class,'dashboard']);
Route::get('/obat', [IndexController::class,'obat']);
Route::get('/katobat', [IndexController::class,'katobat']);
Route::get('/pemasok', [IndexController::class,'pemasok']);
Route::get('/penjualan', [IndexController::class,'penjualan']);
Route::get('/pembelian', [IndexController::class,'pembelian']);
Route::get('/karyawan', [IndexController::class,'karyawan']);
Route::get('/laporan', [IndexController::class,'laporan']);

Route::get('/login', function () {
    return view('home');
});
// Auth::routes();
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/obats', [ObatController::class, 'store'])->name('medicines.store');

