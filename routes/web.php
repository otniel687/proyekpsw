<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;


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

// Route::get('/kontak', 'App\Http\Controllers\KontakController@kontak');
Route::get('/about', [AboutController::class,'tentang']);
Route::get('/kontak', [KontakController::class, 'kontak']);
Route::get('/service', [ServiceController::class, 'service']);
Route::get('/registrasi', [AboutController::class,'regis']);
Route::get('/login', [LoginController::class,'login']);
Route::get('/login/admin', [LoginController::class,'admin']);
Route::get('/login/customer', [LoginController::class,'customer']);
Route::get('/login/mekanik', [LoginController::class,'mekanik']);
Route::get('/login/regis', [LoginController::class,'regis']);