@extends('layouts.app')

@section('content')
    <div class="container border border-dark rounded">
        <div class="jumbotron">
            <h1 class="display-4 text-center blended">Генератор отряда диких!</h1>
            <div class="border border-dark rounded">
                @foreach ($namesList as $names)
                    @if ($loop->last)
                        @switch ($names['rarity'])
                            @case('legendary')
                                <h2 class="text-center legendary m-0 blended-reg-bg">{{ $names['fullName'] }}</h2>
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
                                <h2 class="text-center epic m-0 blended-reg-bg">{{ $names['fullName'] }}</h2>
                            @break
                            @case('rare')
                            <h2 class="text-center text-primary m-0 blended-reg-bg">{{ $names['fullName'] }}</h2>
                            @break
                            @case('uncommon')
                            <h2 class="text-center uncommon m-0 blended-reg-bg">{{ $names['fullName'] }}</h2>
                            @break
                            @default
                            <h2 class="text-center text-secondary m-0 blended-reg-bg">{{ $names['fullName'] }}</h2>
                            @break
                        @endswitch
                    @else
                        @switch ($names['rarity'])
                            @case('legendary')
                                <h2 class="text-center legendary m-0 border-bottom blended-reg-bg border-dark">{{ $names['fullName'] }}</h2>
                            @break
                            @case('epic')
                                <h2 class="text-center epic m-0 border-bottom blended-reg-bg border-dark">{{ $names['fullName'] }}</h2>
                            @break
                            @case('rare')
                            <h2 class="text-center text-primary m-0 border-bottom blended-reg-bg border-dark">{{ $names['fullName'] }}</h2>
                            @break
                            @case('uncommon')
                            <h2 class="text-center uncommon m-0 border-bottom blended-reg-bg border-dark">{{ $names['fullName'] }}</h2>
                            @break
                            @default
                            <h2 class="text-center text-secondary m-0 border-bottom blended-reg-bg border-dark">{{ $names['fullName'] }}</h2>
                            @break
                        @endswitch
                    @endif
                @endforeach
            </div>
            <br>
            <p class="lead">
                <a class="btn btn-blended btn-lg d-flex justify-content-center blended" href="{{ route('team') }}" role="button">Сгенерировать отряд диких</a>
            </p>
        </div>
    </div>
    </body>
@endsection
