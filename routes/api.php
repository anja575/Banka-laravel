<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadnikController;
use App\Http\Controllers\BankaController;
use App\Http\Controllers\TransakcijaController;
use App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/banke', [BankaController::class,'index']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



Route::group(['middleware' => ['auth:sanctum']], function () {
     Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    Route::resource('banke', BankaController::class);
    Route::resource('radnici', RadnikController::class);
    Route::resource('transakcije', TransakcijaController::class);

    Route::post('/logout', [AuthController::class, 'logout']);
});