<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>Axiom Consultancy</p> 
  <h4>{{$service}} - {{$product}} - {{$support}} </h4>
</div>
<div class="jumbotron text-center">
@if($support > 10)
<p>Best Customer support</p>
@elseif($support < 5)
<p>Worst Customer support</p>
@else
<p>Average Customer support</p>
@endif

@unless($service == 'IT')
<h4>Service is not we provided</h4>
@endunless

@php
$msg = 'Wish to work';
echo $msg;
@endphp
<br>
<?php 
print_r($_SERVER['HTTP_HOST']); 
?>

</div>

</body>
</html>
