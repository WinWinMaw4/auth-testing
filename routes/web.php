<?php

use App\Http\Controllers\CustomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class,'welcome'])->name('welcome');

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/login',[CustomController::class,'login'])->name('login');
Route::view('/passcode-login',"passcode")->name('passcode-login');
Route::post('/passcode-login',[CustomController::class,'passCodeLoginAccount'])->name('passCodeLoginAccount');

Route::post('/login',[CustomController::class,'loginAccount'])->name('loginAccount');
Route::post('/logout',[CustomController::class,'logoutAccount'])->name('logout');