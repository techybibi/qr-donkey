<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
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


Route::get('/', function(){
    return view('auth.login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function(){
    Route::get('profile',[ProfileController::class,'userProfile'])->name('admin.profile');
    Route::post('update-profile',[ProfileController::class,'userUpdate'])->name('update.profile');
    Route::get('/qr',[App\Http\Controllers\QrController::class,'index'])->name('qr');
    Route::get('/qr/create',[App\Http\Controllers\QrController::class,'create'])->name('qr.create');
    Route::post('/qr/store',[App\Http\Controllers\QrController::class,'store'])->name('qr.store');
    Route::get('/qr/edit/{id}',[App\Http\Controllers\QrController::class,'edit'])->name('qr.edit');
    Route::post('/qr/update/{id}',[App\Http\Controllers\QrController::class,'update'])->name('qr.update');
    Route::get('/qr/delete/{id}',[App\Http\Controllers\QrController::class,'destroy'])->name('qr.delete');
});


Route::get('/scan/{unique_id}',[App\Http\Controllers\QrController::class,'show'])->name('qr.show');

Route::get('/vc_gen',[App\Http\Controllers\VcController::class,'vcGenerate'])->name('vc.generate');

