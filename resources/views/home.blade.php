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
    @dump($movies);
    <h1 class="text-center">Ciao<i class="fa-solid fa-anchor-lock"></i></h1>
    <ul>
        @foreach ($movies as $movie)

        <li><a href="route('detail',$movie->id)">{{$movie->title}}</a></li>

        @endforeach
    </ul>
</body>

</html>