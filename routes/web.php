<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\BarangControler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriControler;
use App\Http\Controllers\Return_layak_PakaiControler;
use App\Http\Controllers\Return_layak_ReturnControler;
use App\Http\Controllers\Return_RusakControler;

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
    // Route::get('/user', [UserControler::class,'index']);
    // Route::post('/user/store', [UserControler::class,'store']);
    // Route::post('/user/{id}/update', [UserControler::class,'update']);
    // Route::get('/user/{id}/destroy', [UserControler::class,'destroy']);

    //  //Data Master (Barang)
    // Route::get('/barang', [BarangControler::class,'index']);
    //     //Data Master (Kategori)
    // Route::get('/kategori', [KategoriControler::class,'index']);
    //  //Data Master (Return_layak_Pakai)
    // Route::get('/Return_layak_Pakai', [Return_layak_PakaiControler::class,'index']);
    //  //Data Master (Return_layak_Repair)
    // Route::get('/Return_layak_Repair', [Return_layak_RepairControler::class,'index']);
    //  //Data Master (Return_Rusak)
    // Route::get('/Return_Rusak', [Return_RusakControler::class,'index']);

});

// untuk user
Route::middleware(['auth','check_role:user'])->group(function () {
    Route::get('/', function () {
        return 'halaman user';
    })->name('user');
    // Route::get('home',[HomeController::class,'index'])->name('home');
});


// Route::get('/home', [HomeController::class,'home']);
