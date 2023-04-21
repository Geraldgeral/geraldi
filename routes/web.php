<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;


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
    return view('home');
});

    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');

    Route::group(['middleware' => 'auth'], function() {

        Route::get('profile', [\App\Http\Controllers\Auth\ProfileController::class, 'index'])->name('profile.index');
        Route::put('profile', [\App\Http\Controllers\Auth\ProfileController::class, 'update'])->name('profile.update');
    });
    Auth::routes();


Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
