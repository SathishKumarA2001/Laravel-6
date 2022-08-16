@extends('layouts.layout')
@extends('layouts.app')

@section('create')
<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>Axiom Consultancy</p> 
  <img src="/images/axiom.png">

  <!-- Form -->

  <form class="form-inline" action="/company/store" method="POST">
  @csrf
  <label for="name">Name : </label>
    <input type="text" class="form-control" id="name" name="name"><br>
  <label for="project">Project :</label>
    <input type="text" class="form-control" id="project" name="project"><br>
  <label for="amount">Amount :</label>
    <input type="number" class="form-control" id="amount" name="amount"><br>
  <fieldset>
  <input type="checkbox" id="stack" name="stack[]" value="LAMP">
  <label for="vehicle1">LAMP</label><br>
  <input type="checkbox" id="stack" name="stack[]" value="WAMP">
  <label for="vehicle1">WAMP</label><br>
  <input type="checkbox" id="stack" name="stack[]" value="XAMP">
  <label for="vehicle1">XAMP</label><br>
  </fieldset>

    <input type="submit" class="btn btn-default" value="submit">
  </form> 

  </div>
</div>
@endsection