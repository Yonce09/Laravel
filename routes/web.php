<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\Sample2Controller;
use App\Http\Controllers\Sample3Controller;

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
Route::get('sample', [SampleController::class, 'index']);
Route::get('sample2', [Sample2Controller::class, 'index2']);
Route::get('sample3', [Sample3Controller::class,'index3']);
Route::post('store',[Sample3Controller::class,'store']);