<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EkpayChaqueController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'loadFrontEnd']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/validate', [AuthController::class, 'loginvalidate'])->name('loginvalidate');
Route::get('get/time/slot', [FrontendController::class, 'timeSlot'])->name('getSlot');
Route::post('book/slot', [FrontendController::class, 'bookSlot'])->name('bookSlot');



    Route::middleware(['auth'])->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('dashboard', 'dashboard')->name('dashboard');
            Route::get('booklist', 'booklist')->name('booklist');
            Route::get('stop/booking', 'stopBook')->name('stopBook');
           


        });

    });
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
