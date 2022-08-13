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
    return view('welcome');
});

Route::get('/company','App\Http\Controllers\CompanyController@index'); //Bug: Namespace should define fully
                                                                                    // or
Route::get('/company/clients/{client}','App\Http\Controllers\CompanyController@show');  // You can define namespace like this 

Route::get('/company/news','App\Http\Controllers\CompanyController@news');  // You can define namespace like this 