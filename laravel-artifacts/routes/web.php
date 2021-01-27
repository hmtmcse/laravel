<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/login', [AuthenticationController::class, 'login']);
Route::post('/login', [AuthenticationController::class, 'doLogin']);
Route::get('/logout', [AuthenticationController::class, 'logout']);

Route::get('/', function () {
    return view('welcome');
});
