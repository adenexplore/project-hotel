<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\CleanroomController;
use App\Http\Controllers\HomeController;
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
    return view('beranda.index');
});

Route::get('/login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

    
Route::resource('/home', HomeController::class);
Route::resource('/beranda', BerandaController::class);
Route::resource('/check_in', CheckinController::class);
Route::resource('/check_out', CheckoutController::class);
Route::resource('/booking', BookingController::class);
Route::resource('/layanan', LayananController::class);
Route::resource('/cleanroom', CleanroomController::class);

// Auth::routes();
// route untuk logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

require __DIR__.'/auth.php';



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');