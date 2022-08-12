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

Route::get('/company',function() {
    // $data = [
    //     "service" => "IT",
    //     "product" => "E-commerce",
    //     "support" => 15, 
    // ];

    $data = [
        ["service" => "IT","product" => "E-commerce","support" => 10],
        ["service" => "IT","product" => "Mobile App","support" => 5],
        ["service" => "Non-IT","product" => "Voice Process","support" => 0],
    ];
    return view('company',['data'=>$data]);

    // return "Axiom";          return as => application/html
    // return ["name"=>"company",         => application/json 
    //         "base"=>"Axiom",
    //         "Employees"=>["che"=>"tester","sumon"=>"dev"]
    //         ];           
});