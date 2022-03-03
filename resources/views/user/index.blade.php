@extends('layouts.main')

@section('page.title', 'Главная страница')

@section('main.content')

<x-card.header>
    <x-card.title>
        {{ __('Мы внутри') }}
    </x-card.title>
</x-card.header>
    
@endsection