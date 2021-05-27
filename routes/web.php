<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GoogleController;

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


Route::get('/user', [UserController::class, 'index']);
Route::get('/trangchu', [IndexController::class, 'index']);
Route::get('/detail-film/{id}/{slug}.html', [MovieController::class, 'index']);

Route::get('/dangnhap', [GoogleController::class, 'login12']);
Route::get('auth/google', [GoogleController::class ,'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);