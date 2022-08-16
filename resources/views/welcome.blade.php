@extends('layouts.layout')

@section('welcome')
<div class="jumbotron text-center axiom">
<h1>welcome to axiom consulting</h1>
</div>
@endsection

@section('services')
<div class="jumbotron text-center">
<h1>Product & Services</h1>

<p class="success"> {{ session('msg') }} </p>
</div>
@endsection