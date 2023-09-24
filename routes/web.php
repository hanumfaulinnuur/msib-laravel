<?php

use App\Http\Controllers\DahboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [DahboardController::class, 'home']);
Route::get('/Profil', [ProfilController::class, 'index']);
Route::get('/Profil/Kampus', [ProfilController::class, 'info']);
