<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserAuthController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Dashboard
Route::get('/dashboard/login', [AuthController::class, 'showLoginForm'])->name('dashboard.login.form');
Route::post('/dashboard/login', [AuthController::class, 'login'])->name('dashboard.login');
Route::get('/dashboard/logout', [AuthController::class, 'logout'])->name('dashboard.logout');
Route::get('/dashboard/reset', [AuthController::class, 'showResetForm'])->name('dashboard.login.reset');

Route::middleware(['checkDashboardAuth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index'); 
});

// User routes
Route::get('/user/register', [UserAuthController::class, 'showRegistrationForm'])->name('user.register.form');
Route::post('/user/register', [UserAuthController::class, 'register'])->name('user.register');

Route::get('/user/login', [UserAuthController::class, 'showLoginForm'])->name('user.login.form');
Route::post('/user/login', [UserAuthController::class, 'login'])->name('user.login');

Route::get('/user/reset', [UserAuthController::class, 'showResetForm'])->name('user.login.reset');
// Route::post('/user/reset', [UserAuthController::class, 'resetPass'])->name('user.reset');

Route::middleware(['auth'])->group(function () {
    Route::get('/user/logout', [UserAuthController::class, 'logout'])->name('user.logout');
});

require __DIR__.'/auth.php';
