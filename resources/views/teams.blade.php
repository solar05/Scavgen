<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scavgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand h1" href="#">Scavgen</a>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{ route('single') }}">Собрать дикого</a>
                    <a class="nav-item nav-link" href="{{ route('team') }}">Собрать отряд</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container border border-dark rounded">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Генератор отряда диких!</h1>
            <hr class="my-4">
            <div class="border border-dark rounded">
                @foreach ($namesList as $names)
                    @if ($loop->last)
                    <h2 class="text-center m-0">{{ $names['fullName'] }}</h2>
                    @else
                        <h2 class="text-center border-bottom border-dark">{{ $names['fullName'] }}</h2>
                    @endif
                @endforeach
            </div>
            <br>
            <p class="lead">
                <a class="btn btn-success btn-lg d-flex justify-content-center" href="{{ route('team') }}" role="button">Сгенерировать отряд диких</a>
            </p>
        </div>
    </div>
    </body>
</html>
