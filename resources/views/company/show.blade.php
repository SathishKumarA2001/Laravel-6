@extends('layouts.layout')

@section('client')
<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>Axiom Consultancy</p> 
  <img src="/images/axiom.png"><br>

  <h4>{{ $client->id }}</h4>
  <h4>{{ $client->name }}</h4>
  <h4>{{ $client->project }}</h4>
  <h4>{{ $client->amount }}</h4>

  @foreach($client->stack as $stack)
  <p>{{ $stack }}</p>
  @endforeach
  
</div>
@endsection