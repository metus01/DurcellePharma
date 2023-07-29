<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::controller(HomeController::class)->group(function () {
    //     Route::match(['get', 'post'], '/login', 'login')->name('app_login');
    //     Route::match(['get', 'post'], '/register', 'register')->name('app_register');
    Route::get('/', 'home')->name('app_home');
    Route::get('/about', 'about')->name('app_about');
    Route::get('/pharmacie', 'pharmacie')->name('app_pharmacie');
    Route::get('/catalogue', 'catalogue')->name('app_catalogue');
    Route::get('/tableau', 'tableau')->name('app_tableau');
    Route::match(['get', 'post'], '/dashboard', 'dashboard')->name('app_dashboard');
});

Route::controller(LoginController::class)->group(function(){
     Route::get('/logout', 'logout')->name('app_logout');
 });
// Route::get('home', [HomeController::class, 'home'])->name('home');
// Route::get('login' , [HomeController::class] , 'login')->name('login');
// // Route::post('login' , [HomeController::class , 'doLogin']);
// Route::get('register' , [HomeController::class , 'register'])->name('register');
// // Route::post('register' , [HomeController::class , 'doRegister']);

