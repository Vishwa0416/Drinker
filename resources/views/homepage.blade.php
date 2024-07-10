@extends('layouts')
@section('title', 'Home Page')
@section('content')

<div class="container">
    <h1>Drinker!</h1>
    <p>Make your own drinks as you wish!
    </p>
    <div>
        <h3 class="text-center">Wines</h3>
        </br>
        <div>
            <img src="{{asset('images/wine1.jpeg')}}" alt="Wines" class="img-fluid" width="125px" height="125px">
        </div>
    </div>
</div>

@endsection