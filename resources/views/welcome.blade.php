@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>Questa è Boolean Mondadori</h2>
        <div class="row row-cols-4">
            @foreach ($movies as $movie)
                <div class="col p-4">
                    <div class="card">
                        <figure>
                            <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                        </figure>
                        <div class="card-body">
                            <h2 class="card-text">{{ $movie->title }}</h2>
                            <p class="card-text">Voto: {{ $movie->vote }}</p>
                            <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
