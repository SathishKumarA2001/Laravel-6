<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use Illuminate\Http\Request;
use App\Models\Clients;

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

Route::get('/company',[CompanyController::class,'index'])->name('company.index');
// Route::get('/company/clients/{client}',[CompanyController::class,'show']);  // You can define namespace like this 
// Route::get('/company/create',[CompanyController::class,'create']);
// Route::post('/company/store',[CompanyController::class,'store']);
// Route::delete('/company/complete/{id}',[CompanyController::class,'complete'])->name('company.complete');
// Route::get('/news',[CompanyController::class,'news']); 
// Auth::routes();
// //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// // Route::get('/my_blades/{name}', function() {
// //     return view('/my_blades/Display',["name" => 'che']);
// // });

// // Route::any('/',function(Request $request){
// //     print_r($request->fullUrl());
// // });

// // Route::redirect('/', '/news');

// // Route::get('/company/create',[CompanyController::class,'create'])->name('create');

// // Route::get('/{name?}', function ($name = 'John') {
// //     //return redirect()->route('create');
// //     return to_route('create',['name'=>'che']);
// //     // $url = route('create');
// //     // return $url;
// // });


// Route::middleware(['auth'])->group(function () {
//     Route::get('/', function () {
//         return view('news.news');
//     });
 
//     Route::get('/company/create', function () {
//         return view('/company/create');
//     });
// });

// Route::get('/news', function (Request $request) {
//     return view('news.news');
// });

// Route::prefix('company')->group(function () {
//     Route::get('/create', function () {
//         return view('company/create');
//     });
// });

// use App\Models\User;
 
// Route::get('/company/clients/{client:name}', function (Clients $client) {
//     return $client;
// })->withTrashed();

Route::get('/news', function (Request $request){
    print_r($request->url());
})->middleware('myensure:dev');