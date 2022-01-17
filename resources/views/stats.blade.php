<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scavgen</title>
    <link href="./css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    @if (App::environment('production'))
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(70878700, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/70878700" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    @endif
    </head>
    <body class="scav-back">
    <script src="https://unpkg.com/magic-snowflakes/dist/snowflakes.min.js"></script>
    <script>
        new Snowflakes();
    </script>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link blend-font" href="{{ route('single') }}">Собрать дикого</a>
                    <a class="nav-item nav-link blend-font" href="{{ route('team') }}">Собрать отряд</a>
                    <a class="nav-item nav-link blended-nav rounded" href="{{ route('stats') }}">Статистика</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container border border-dark rounded">
        <div class="jumbotron">
            <h1 class="display-4 text-center blended">Статистика.</h1>
            <div class="border border-dark rounded">
                <h2 class="text-center legendary m-0 border-bottom blended-reg-bg border-dark">Легендарных: {{ $stats->legendary }}</h2>
                <h2 class="text-center epic m-0 border-bottom blended-reg-bg border-dark">Эпических: {{ $stats->epic }}</h2>
                <h2 class="text-center text-primary m-0 border-bottom blended-reg-bg border-dark">Редких: {{ $stats->rare }}</h2>
                <h2 class="text-center uncommon m-0 border-bottom blended-reg-bg border-dark">Необычных: {{ $stats->uncommon }}</h2>
                <h2 class="text-center text-secondary m-0 blended-reg-bg">Обычных: {{ $stats->common }}</h2>
            </div>
            <br>
            <p class="lead">
                <a class="btn btn-blended btn-lg d-flex justify-content-center blended" href="{{ route('stats') }}" role="button">Обновить информацию</a>
            </p>
        </div>
    </div>
    </body>
</html>
