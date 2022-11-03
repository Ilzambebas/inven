<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControler;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\BarangControler;
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

Route::get('/', [AuthControler::class,'index'])->name('index');
Route::post('/cek_login', [AuthControler::class, 'cek_login']);
Route::get('/logout', [AuthControler::class,'logout']);

Route::group(['middleware'=>  ['auth','check_login:admin']], function)()
  {
    //Data Master (User)
    Route::get('/user', [UserControler::class,'index']);
    Route::post('/user/store', [UserControler::class,'store']);
    Route::post('/user/{id}/update', [UserControler::class,'update']);
    Route::get('/user/{id}/destroy', [UserControler::class,'destroy']);

     //Data Master (Barang)
    Route::get('/barang', [BarangControler::class,'index']);
        //Data Master (Kategori)
    Route::get('/kategori', [KategoriControler::class,'index']);
     //Data Master (Return_layak_Pakai)
    Route::get('/Return_layak_Pakai', [Return_layak_PakaiControler::class,'index']);
     //Data Master (Return_layak_Repair)
    Route::get('/Return_layak_Repair', [Return_layak_RepairControler::class,'index']);
     //Data Master (Return_Rusak)
    Route::get('/Return_Rusak', [Return_RusakControler::class,'index']);
});

Route::group(['middleware'=>  ['auth','Checklevel:admin,user']], function)()
  {

Route::get('/home', [HomeControler::class,'home']);
  });
