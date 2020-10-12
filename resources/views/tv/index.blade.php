@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Популярные сериалы</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularTv as $tvshow)<x-tv-card :tvshow="$tvshow" :genres="$genres"></x-tv-card>@endforeach</div>
        </div>
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Топ Рейтинг Сериалов</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($topRatedTv as $tvshow) @if($loop->index < 10)<x-tv-card :tvshow="$tvshow" :genres="$genres"></x-tv-card> @endif @endforeach</div>
        </div>
    </div>
@endsection
