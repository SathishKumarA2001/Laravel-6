<!-- Blade {{ $name }} -->
Hello, {{ strtotime("now") }}
<br>
<!-- ------------ -->
Hello, {!! "<br>" !!}

<br>
<!-- ----------- -->
Hello Javascipt @{{time()}}

<?php $arr = array(1,2,3) ?>

<script>
    var app = {{ Js::from($arr) }};
    console.log(app);
</script>

<!-- -------------- -->

@verbatim

<div class="container">
    Hello, {{$name}}
</div>

@endverbatim

<!-- --------------- -->

@auth
    The user is authenticated...
@endauth
 
@guest
    The user is not authenticated...
@endguest

<!-- ---------------- -->

@production
    Production specific content...
@endproduction

@env('staging')
    The application is running in "staging"...
@endenv
 
@env(['staging', 'production'])
    The application is running in "staging" or "production"...
@endenv

<!-- ----------------- -->

@include('components.alert');