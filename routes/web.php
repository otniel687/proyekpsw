<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\BookingController;


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

// Route::get('/regis', function () {
//     return view('regitrasi.registration');
// });
// Route::get('/kontak', 'App\Http\Controllers\KontakController@kontak');
Route::get('/about', [AboutController::class,'tentang']);
Route::get('/kontak', [AboutController::class, 'kontak']);
Route::get('/service', [ServiceController::class, 'service']);
// Route::get('/registrasi', [AboutController::class,'regis']);
// Route::get('/login', [LoginController::class,'login']);
// Route::get('/login/admin', [LoginController::class,'admin']);
// Route::get('/login/customer', [LoginController::class,'customer']);
// Route::get('/login/mekanik', [LoginController::class,'mekanik']);
// Route::get('/login/regis', [LoginController::class,'regis']);

Route::get('/registrasi', [BookingController::class, 'index'])->name('registrasi');
Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('simpanregister', 'App\Http\Controllers\AuthController@simpanregister')->name('simpanregister');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        // Route::resource('admin', AdminController::class);
        Route::resource('admin/customer', CustomerController::class);
        Route::resource('admin/mobil', MobilController::class);
    });
    Route::group(['middleware' => ['cek_login:pelanggan']], function () {
        Route::resource('pelanggan', PelangganController::class);
        Route::post('/booking', [BookingController::class, 'store'])->name('registrasi');
    });
    Route::group(['middleware' => ['cek_login:mekanik']], function () {
        Route::resource('mekanik', MekanikController::class);
        // Route::resource('admin/mobil', MobilController::class);
    });
});

