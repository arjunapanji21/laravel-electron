<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return inertia()->render('login');
})->name('login');

Route::post('/auth', [UserController::class, 'auth'])->name('auth');

Route::prefix('superadmin')->middleware('auth', 'superadmin')->group(function () {
    Route::get('/home', [HomeController::class, 'superadmin'])->name('superadmin.home');

    Route::prefix('akun')->group(function () {
        Route::get('harta', [AkunController::class, 'harta'])->name('superadmin.akun.harta');
    });
});

// Route::prefix('admin')->middleware('auth', 'admin')->group(function () {
//     Route::get('/home', function () {
//         return inertia()->render('admin/home');
//     })->name('admin.home');
// });

// Route::prefix('operator')->middleware('auth', 'operator')->group(function () {
//     Route::get('/home', function () {
//         return inertia()->render('operator/home');
//     })->name('operator.home');
// });
