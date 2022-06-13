<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    {{-- @dump($movies); --}}
    <h1 class="text-center my-5"><i class="fa-solid fa-video"></i> MOVIES <i class="fa-solid fa-clapperboard"></i></h1>
    <div class="row gap-5 justify-content-center">
        @foreach ($movies as $movie)

        <div class="card col-lg-4 justify-content-center mx-5">
            <a href="" class="d-flex flex-column gap-3">
                <li>
                    <h5>Titolo:</h5> {{$movie->title}}
                </li>
                <li>
                    <h5>Titolo originale:</h5> {{$movie->original_title}}
                </li>
                <li>
                    <h5>Lingua:</h5> {{$movie->nationality}}
                </li>
                <li>
                    <h5>Data:</h5> {{$movie->date}}
                </li>
                <li>
                    <h5>Voto:</h5> {{$movie->vote}}
                </li>
            </a>
        </div>

        @endforeach
    </div>
</body>

</html>