<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Scavenger's names generator."/>
    <title>Scavgen</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    
    <link href="/css/app.css" rel="stylesheet">
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
    <meta name="yandex-verification" content="b190b1610cb41872" />
    @endif
    </head>
    <body style="background-color: black;" class="scav-back">
        <script src="https://unpkg.com/magic-snowflakes/dist/snowflakes.min.js"></script>
        <script>
            new Snowflakes();
        </script>
            <div class="container">
                <nav class="navbar navbar-expand navbar-light">
                    <div class="collapse navbar-collapse">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link {{ Route::currentRouteName() == 'scav.single' ? 'blended-nav rounded' : 'blend-font' }}" href="{{ route('scav.single') }}">{{ __('messages.generate.single') }}</a>
                            <a class="nav-item nav-link {{ Route::currentRouteName() == 'scav.team' ? 'blended-nav rounded' : 'blend-font' }}" href="{{ route('scav.team') }}">{{ __('messages.generate.team') }}</a>
                            <a class="nav-item nav-link {{ Route::currentRouteName() == 'scav.stats' ? 'blended-nav rounded' : 'blend-font' }}" href="{{ route('scav.stats') }}">{{ __('messages.stats') }}</a>
                        </div>
                    </div>
                    <div class="navbar navbar-expand navbar-light navbar-right">
                        <div class="navbar-nav">
                            @if (app()->getLocale() == 'en')
                                <a class="nav-item nav-link blended-nav rounded" href="{{ url()->current() . '?lang=ru' }}">EN</a>
                            @elseif (app()->getLocale() == 'ru')
                                <a class="nav-item nav-link blended-nav rounded" href="{{ url()->current() . '?lang=en' }}">RU</a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
            <button id="phrase-button" style="display: none"></button>
            <audio id="phrase">
                    <source src="./sounds/fraerok.m4a" type="audio/mpeg">
            </audio>

            <script>
                const playButton = document.getElementById("phrase-button");

                playButton.addEventListener("click", () => {
                    triggerLegendarySound();
                });

                function triggerLegendarySound() {
                    let audio = document.getElementById("phrase");
                    if (audio != null) {
                        audio.volume = 0.4;
                        audio.play();
                    }
                }

                function playLegendarySound() {
                    playButton.click();
                }
            </script>
            <br>
        @yield('content')
    </body>
</html
