<?php


use App\Http\Controllers\PolazinkController;

use App\Http\Controllers\PolaznikController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/polaznici/{id}',[PolaznikController::class,'show']);

// Route::get('/polaznici', [PolaznikController::class, 'index']);