<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\KupovinaController;
use App\Http\Controllers\KursController;
use App\Http\Controllers\PolaznikController;

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


Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);


Route::get('/kursevi',[KursController::class,'index']);
Route::get('/polaznici',[PolaznikController::class,'index']);
Route::get('/polaznici/{id}',[PolaznikController::class,'show']);




Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout',[AuthController::class,'logout']);

    Route::get('/kupovine',[KupovinaController::class,'index']);
    Route::delete('/polaznici/{id}',[PolaznikController::class,'destroy']);
    Route::post('/polaznici',[PolaznikController::class,'store']);

    Route::put('/polaznici/{id}',[PolaznikController::class,'update']);
});