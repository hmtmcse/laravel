<?php

use App\Http\Controllers\DrawIntervalController;
use App\Http\Controllers\Excel\ExcelExpController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/excel-exp/excel', [ExcelExpController::class, 'excel']);
Route::get('/excel-exp', [ExcelExpController::class, 'index']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
