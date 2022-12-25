@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center blended">Генератор имен диких!</h1>
            <hr class="my-4">
            @switch ($names['rarity'])
                @case('legendary')
                <h2 class="text-center legendary blended-reg-bg">{{ $names['fullName'] }}</h2>
                <br>
                <h2 class="text-center legendary blended-reg-bg">Легендарная находка!</h2>

                <audio id="phrase" autoplay>
                    <source src="./sounds/fraerok.m4a" type="audio/mpeg">
                </audio>

                <script>
                    let audio = document.getElementById("phrase");
                    if (audio != null) {
                        audio.volume = 0.5;
                    }
                </script>
                @break
                @case('epic')
                    <h2 class="text-center blended-reg-bg">{{ $names['fullName'] }}</h2>
                    <br>
                    <h2 class="text-center epic blended-reg-bg">Эпическая находка!</h2>
                @break
                @case('rare')
                    <h2 class="text-center blended-reg-bg">{{ $names['fullName'] }}</h2>
                    <br>
                    <h2 class="text-center text-primary blended-reg-bg">Редкая находка!</h2>
                @break
                @case('uncommon')
                    <h2 class="text-center blended-reg-bg">{{ $names['fullName'] }}</h2>
                    <br>
                    <h2 class="text-center uncommon blended-reg-bg">Необычная находка!</h2>
                @break
                @default
                    <h2 class="text-center blended-reg-bg">{{ $names['fullName'] }}</h2>
                    <br>
                    <h2 class="text-center text-secondary blended-reg-bg">Обычный дикий.</h2>
                @break
            @endswitch
            <br>
            <p class="lead">
                <a class="btn btn-blended btn-lg d-flex justify-content-center blended" href="{{ route('single') }}" role="button">Сгенерировать</a>
            </p>
        </div>
    </div>
@endsection
