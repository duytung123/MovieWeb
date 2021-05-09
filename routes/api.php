<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('login', [LoginController::class, 'Login']);
Route::post('register', [LoginController::class, 'Register']);

Route::group(['middleware' => 'auth.jwt'], function () {
   Route::get('getUser', [LoginController::class, 'getUser']);
});
Route::get('listMovie', [MovieController::class, 'index']);
Route::get('getMovieId/{movie_Id}', [MovieController::class, 'getId']);
//Route::get('/getMovieId/{movie_Id}', [MovieController::class, 'show'])->name('expenses.show');