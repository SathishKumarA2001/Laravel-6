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

  <!-- @for($i=0; $i < count($data); $i++)
    <p>{{$data[$i]['service']}} - {{$data[$i]['product']}} - {{$data[$i]['support']}}</p>
  @endfor -->

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

</body>
</html>
