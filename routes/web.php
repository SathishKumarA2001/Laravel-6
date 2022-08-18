<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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

Route::get('/company',[CompanyController::class,'index'])->name('company.index')->middleware('auth');                                                                                 // or
Route::get('/company/clients/{client}',[CompanyController::class,'show']);  // You can define namespace like this 
Route::get('/company/create',[CompanyController::class,'create']);
Route::post('/company/store',[CompanyController::class,'store']);
Route::delete('/company/complete/{id}',[CompanyController::class,'complete'])->name('company.complete');
Route::get('/news',[CompanyController::class,'news']); 
Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/my_blades/{name}', function() {
    return view('/my_blades/Display',["name" => 'che']);
});