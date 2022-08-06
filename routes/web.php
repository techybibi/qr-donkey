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
    Route::get('/contacts',[App\Http\Controllers\ContactController::class,'index'])->name('contacts');
    Route::get('/contacts/create',[App\Http\Controllers\ContactController::class,'create'])->name('contacts.create');
    Route::post('/contacts/store',[App\Http\Controllers\ContactController::class,'store'])->name('contacts.store');
    Route::get('/contacts/edit/{id}',[App\Http\Controllers\ContactController::class,'edit'])->name('contacts.edit');
    Route::post('/contacts/update/{id}',[App\Http\Controllers\ContactController::class,'update'])->name('contacts.update');
    Route::get('/contacts/delete/{id}',[App\Http\Controllers\ContactController::class,'destroy'])->name('contacts.delete');
});
