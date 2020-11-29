<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
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
Route::get('escritorio',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('perfil',[DashboardController::class,'perfil'])->name('dashboard.perfil');

Route::get('login',[loginController::class,'formLogin'])->name('login.formLogin');
Route::post('auth',[loginController::class,'auth'])->name('login.auth');

