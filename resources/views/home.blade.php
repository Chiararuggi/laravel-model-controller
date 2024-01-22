@extends('layouts.app')

@section('content')
<h1>Movie:</h1>
@foreach ($movies as $movie)
        <li>
            <span>{{$movie->title}}</span>
            <span>{{$movie->original_title}}</span>
        </li>
    @endforeach
@endsection