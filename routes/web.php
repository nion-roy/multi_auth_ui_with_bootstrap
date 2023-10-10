<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();


Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->middleware(['admin']);

Route::get('/user/dashboard', [App\Http\Controllers\UserController::class, 'index'])->middleware(['user']);
