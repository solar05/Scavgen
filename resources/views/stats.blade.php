@extends('layouts.app')

@section('content')
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
@endsection
