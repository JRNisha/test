<?php

use App\Http\Controllers\SigninformController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/test', [TestController::class,'test']);
Route::get('/testtwo',[TestController::class,'test2']);
Route::get('/tables',[TestController::class,'tables']);
Route::get('/form',[TestController::class,'form']);
Route::get('/signinform',[SigninformController::class,'signform'])->name('admin.signin');
