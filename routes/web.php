<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
    return view('index');
});
Route::get('/admin',[AdminController::class,'login'])->name('admin');
Route::group(['prefix'=>'backend','as'=>'backend.'],function(){
Route::post('/adminlogin',[AdminController::class,'adminLogin'])->name('adminLogin');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->middleware('AdminAuth');
});