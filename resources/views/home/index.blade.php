@extends('layouts.main')

@section('page.title', 'Главная страница')

@section('main.content')
    @if ('succeess')
        <div>
            {{ $message }}
        </div>
    @endif

    <x-card.body>
        <x-card.header>
            <x-card.title>
                Главная страница
            </x-card.title>
        </x-card.header>
    </x-card.body>
@endsection