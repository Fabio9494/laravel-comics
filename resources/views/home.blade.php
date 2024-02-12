<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header');
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
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h4 class="fs-6 p-2">{{ $comic['title'] }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </main>



    @include('partials.footer');
</body>

</html>
