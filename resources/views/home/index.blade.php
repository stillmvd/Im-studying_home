@extends('layouts.main')

@section('page.title', 'Главная страница')

@section('main.content')
    <x-card.body>
        <x-card.header>
            <x-card.title>
                {{ __('Главная страница') }}
            </x-card.title>
        </x-card.header>
    </x-card.body>
@endsection