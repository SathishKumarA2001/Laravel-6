@extends('layouts.app')

@section('company')
<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>Axiom Consultancy</p> 
  <img src="/images/axiom.png">
  @foreach($data as $data)
    <p><b>{{$data['service']}} - {{$data['product']}} - {{$data['support']}}</b></p>
    @if($loop->first)
    <p> First Element of Array {{$loop->index}}</p>
    @elseif($loop->last)
    <p>Last Element of Array {{$loop->index}}</p>
    @endif
  @endforeach
  </div>
</div>
@endsection