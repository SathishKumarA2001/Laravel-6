<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function show($client) {
        return view('client',['client'=>$client]);
    }
}
