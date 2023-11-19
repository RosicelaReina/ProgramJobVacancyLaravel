<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\PostulateController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\auth\RegisteredUserController;
use App\Http\Controllers\auth\RegisteredUserPController;
use App\Http\Controllers\auth\AuthenticationSessionController;


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

//==========================RUTAS HOME=============================
Route::get('/', [IndexController::class,'index']);
Route::post('/', [IndexController::class,'getVacanciesByCharge'])->name('VacancyByCharge');

//=========================RUTAS ADMIN===============================
Route::get('/welcome', [AdminController::class, 'welcome'])->name('welcomeAdmin');
Route::resource('/vacancy', VacancyController::class);
Route::resource('/professional', ProfessionalController::class);
Route::resource('/postulate', PostulateController::class);

//===================================RUTAS SESIÓN=====================================================
Route::get('/login', [AuthenticationSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticationSessionController::class, 'store'])->name('start');
Route::post('/logout', [AuthenticationSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('save');

Route::get('/registerP', [RegisteredUserPController::class, 'create'])->name('registerP');
Route::post('/registerP', [RegisteredUserPController::class, 'store'])->name('save');

