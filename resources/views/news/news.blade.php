@extends('layouts.layout')

@section('news')
<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>Axiom Consultancy</p> 
  <img src="/images/axiom.png"><br>
  @foreach($news as $news)
    <h4>{{ $news->news }} --</h4>
  @endforeach
</div>
@endsection