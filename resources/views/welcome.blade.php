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
                    <a class="nav-item nav-link" href="/">Собрать дикого</a>
                    <a class="nav-item nav-link" href="/team">Собрать отряд</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container border border-dark rounded">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Генератор имен диких!</h1>
            <hr class="my-4">
            <h2 class="text-center">{{ $names['fullName'] }}</h2>
            <br>
            @if ($isBingo)
            <h2 class="text-center text-success">БИНГО!</h2>
            <br>
            @endif
            <p class="lead">
                <a class="btn btn-success btn-lg d-flex justify-content-center" href="/" role="button">Сгенерировать</a>
            </p>
        </div>
    </div>
    </body>
</html>
