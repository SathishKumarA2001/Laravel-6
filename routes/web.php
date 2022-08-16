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

Route::get('/company','App\Http\Controllers\CompanyController@index')->name('company.index')->middleware('auth'); //Bug: Namespace should define fully
                                                                                    // or
Route::get('/company/clients/{client}','App\Http\Controllers\CompanyController@show');  // You can define namespace like this 

Route::get('/company/create','App\Http\Controllers\CompanyController@create');

Route::post('/company/store','App\Http\Controllers\CompanyController@store');

Route::delete('/company/complete/{id}','App\Http\Controllers\CompanyController@complete')->name('company.complete');

Route::get('/news','App\Http\Controllers\CompanyController@news'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
