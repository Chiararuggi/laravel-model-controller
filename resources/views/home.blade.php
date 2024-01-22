@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Movie:</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-3">
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->original_title}}</p>
                    <p class="card-text">Nationality: {{$movie->nationality}}</p>
                    <p class="card-text">Date: {{$movie->date}}</p>
                    <p class="card-text">Vote: {{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection