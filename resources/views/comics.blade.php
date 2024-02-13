@extends('layout.app')

@section('content')
    @php
        $comics = config('comics');
    @endphp
    <main>
        <div class="jumbotron"></div>
        <div class="current-series">CURRENT SERIES</div>

        <div class="container-main">
            <div class="container-fumetti">
                @foreach ($comics as $comic)
                    <div class="card-fumetto text-center">
                        <a href="{{ route('comicDetails', ['param' => $comic['id']]) }}">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <h4 class="fs-6 p-2">{{ $comic['title'] }}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </main>
@endsection
