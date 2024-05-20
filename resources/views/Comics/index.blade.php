@extends('layout.main')

@section('content')

<h1>Golden Age</h1>
<div class="container">
    <div class="row">
        @foreach ($comics as $comic )
        <div class="col">
            <div class="card" style="width: 18rem">
                <h4 class="card-title"> {{$comic->title}} </h4>
                <img class="card-img-top" src={{$comic->thumb}}>
                <div class="card-body">
                    <h4 class="card-text"> {{$comic->series}} </h4>
                    <p class="card-text"> {{$comic->description}} </p>
                    <p class="card-text"> {{$comic->type}} {{$comic->sale_date}}</p>
                    <p class="card-text"> {{$comic->price}} </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
