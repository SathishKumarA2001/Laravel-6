<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\News;

class CompanyController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
        
    public function index() {

        $data = [
            ["service" => "IT","product" => "E-commerce","support" => 10],
            ["service" => "IT","product" => "Mobile App","support" => 5],
            ["service" => "Non-IT","product" => "Voice Process","support" => 0],
        ];
        return view('company.index',['data'=>$data]);
    }

    public function show($client_name) {
        //$clients = Clients::all();
        $client = Clients::findOrFail($client_name);
        return view('company.show',['client'=>$client]);
    }

    public function create() {
        return view('company.create');
    }

    public function store() {
        $client = new Clients();
        $client->name = request('name');
        $client->project = request('project');
        $client->amount = request('amount');
        $client->stack = request('stack');
        
        $client->save();
        return redirect('/')->with('msg','Your project has been submitted');
    }

    public function complete($id) {
        $client = Clients::findOrFail($id);
        $client->delete();

        return redirect('/');
    }

    public function news(){
        $news = News::all();
        return view('news.news',['news'=>$news]);
    }
}



