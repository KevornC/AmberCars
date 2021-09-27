<?php

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
    return view('amber.brands');
});
Route::post('/','App\Http\Controllers\AmberCars@addbrand');

Route::get('/addtype','App\Http\Controllers\AmberCars@viewtype');
Route::post('/addtype','App\Http\Controllers\AmberCars@addtype');


Route::get('/addmodel','App\Http\Controllers\AmberCars@viewmodel');
Route::post('/addmodel','App\Http\Controllers\AmberCars@addmodel');


Route::get('/viewmodels','App\Http\Controllers\AmberCars@view');
Route::get('/viewtypes','App\Http\Controllers\AmberCars@viewtypes');
Route::get('/viewbrands','App\Http\Controllers\AmberCars@viewbrands');

//Delete

Route::get('/remove/Models/{id?}','App\Http\Controllers\DeleteController@dmodel');
Route::get('/remove/Types/{id?}','App\Http\Controllers\DeleteController@dtype');
Route::get('/remove/Brands/{id?}','App\Http\Controllers\DeleteController@dbrand');
