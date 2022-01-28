<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AuthAdmin;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\LP\AuthController as AuthUser;
use App\Http\Controllers\LP\ControllerUtama;

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

Route::get('/', [AuthUser::class, 'index'])->name('login');
Route::get('/logout', [AuthUser::class, 'destroy']);
Route::post('/auth_member', [AuthUser::class, 'authenticate']);


Route::get('/utama', [ControllerUtama::class, 'index'])->middleware('auth_saya');
Route::get('/product', [ControllerUtama::class, 'produk'])->middleware('auth_saya');

//
Route::get('/dashboard', [BerandaController::class, 'index'])->middleware('auth_saya');
Route::get('/manajemen_produk', [BerandaController::class, 'manajemen_produk'])->middleware('auth_saya');
Route::get('/detail_edit/{id}', [BerandaController::class, 'detail_edit'])->middleware('auth_saya');
Route::get('/delete_data/{id}', [BerandaController::class, 'destroy'])->middleware('auth_saya');
Route::post('/input_data', [BerandaController::class, 'store'])->middleware('auth_saya');
Route::post('/update_data/{id}', [BerandaController::class, 'update'])->middleware('auth_saya');

//
Route::post('/auth_admin', [AuthAdmin::class, 'authenticate_admin']);
