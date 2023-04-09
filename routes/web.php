<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\Sample2Controller;
use App\Http\Controllers\Sample3Controller;
use App\Http\Controllers\Sample4Controller;
use App\Http\Controllers\Sample5Controller;

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
Route::get('sample4', [Sample4Controller::class,'index4']);
Route::get('sample5', [Sample5Controller::class,'index5']);
Route::post('test',[Sample4Controller::class,'test']);
Route::post('test2',[Sample5Controller::class,'test2']);
Route::post('store',[Sample3Controller::class,'store']);