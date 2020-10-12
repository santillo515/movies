@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Популярные фильмы</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)<x-movie-card :movie="$movie" :genres="$genres"></x-movie-card>@endforeach
            </div>
        </div> <!-- end popular movies -->
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Сейчас играет</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($nowPlayingMovies as $movie) @if($loop->index < 15)<x-movie-card :movie="$movie"></x-movie-card> @endif @endforeach
            </div>
        </div>
    </div>
@endsection
