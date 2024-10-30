<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelRekap;
use App\Http\Controllers\KehadiranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', [TabelRekap::class, 'index'])->name('about');

// Tambahkan rute ini untuk menambah data kehadiran "Datang"
Route::post('/hadir', [KehadiranController::class, 'datang'])->name('datang');
 // Untuk mencatat kedatangan
Route::post('/pulang', [KehadiranController::class, 'pulang'])->name('pulang');