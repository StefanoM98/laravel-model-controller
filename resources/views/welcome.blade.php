@extends('layouts.app')

@section('content')
    <h2>Questa è Boolean Mondadori</h2>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <img src="{{ $movie->image }}" alt="">
                <h2>{{ $movie->title }}</h2>
            </li>
        @endforeach
    </ul>
@endsection
