@extends('layout.main')

@section('content')

<h1>Golden Age</h1>
<div class="container">
    <div class="row">
        @foreach ($comics as $comic )
        <div class="col">
            <div class="card" style="width: 18rem">
                <img class="card-img-top" src={{$comic->thumb}}>
                <div class="card-body">
                    <h5 class="card-title"> {{$comic->title}} </h5>
                    <p class="card-text"> {{$comic->type}} </p>
                    <p class="card-text"> {{$comic->price}} </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
