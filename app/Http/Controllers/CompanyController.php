<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Client;
use App\Models\News;

class CompanyController extends Controller
{
        
    public function index() {

        $data = [
            ["service" => "IT","product" => "E-commerce","support" => 10],
            ["service" => "IT","product" => "Mobile App","support" => 5],
            ["service" => "Non-IT","product" => "Voice Process","support" => 0],
        ];
        return view('company',
                    ['data'=>$data,
                    'name'  => request('name'),
                    'age'   => request('age'),
                    ]);
    }

    public function show($client_name) {
        $clients = Clients::all();
        return view('client',['clients'=>$clients],['client_name'=>$client_name]);
    }

    public function news(){
        $news = News::all();
        return view('news',['news'=>$news]);
    }
}



