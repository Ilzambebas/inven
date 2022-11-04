<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Return_layak_PakaiController;
use App\Http\Controllers\Return_layak_ReturnController;
use App\Http\Controllers\Return_RusakController;

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
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/cek_login', [AuthController::class, 'cek_login'])->name('check');
Route::get('/logout', [AuthController::class,'logout'])->name('check');

Route::middleware(['auth','check_role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return 'Halaman admin';
    })->name('admin');

    //Data Master (User)
    // Route::get('/', [UserController::class,'index']);
    // Route::post('/user/store', [UserController::class,'store']);
    // Route::post('/user/{id}/update', [UserController::class,'update']);
    // Route::get('/user/{id}/destroy', [UserController::class,'destroy']);

    //  //Data Master (Barang)
    // Route::get('/barang', [BarangController::class,'index']);
    //     //Data Master (Kategori)
    // Route::get('/kategori', [KategoriController::class,'index']);
    //  //Data Master (Return_layak_Pakai)
    // Route::get('/Return_layak_Pakai', [Return_layak_PakaiController::class,'index']);
    //  //Data Master (Return_layak_Repair)
    // Route::get('/Return_layak_Repair', [Return_layak_RepairController::class,'index']);
    //  //Data Master (Return_Rusak)
    // Route::get('/Return_Rusak', [Return_RusakController::class,'index']);

});

// untuk user
Route::middleware(['auth','check_role:user'])->group(function () {
    Route::get('/', function () {
        return 'halaman user';
    })->name('user');
    Route::get('home',[HomeController::class,'index'])->name('home');
});


Route::get('/home', [HomeController::class,'home']);
