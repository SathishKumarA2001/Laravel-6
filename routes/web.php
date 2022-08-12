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
Route::get('/company/{client}',[CompanyController::class],'show');  // You can define namespace like this 
