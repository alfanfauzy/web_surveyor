<?php

use App\Http\Controllers\SurveyorController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/surveyor', [SurveyorController::class, 'index']);
Route::post('/surveyor/add', [SurveyorController::class, 'add']);

Route::get('/pengunjung', [PengunjungController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/accept/{id}', [AdminController::class, 'updateStatus']);
