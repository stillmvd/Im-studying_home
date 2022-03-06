@extends('layouts.main')

@section('page.title', 'Оставить заявку')

@section('main.content')

    <x-card.body>
        <x-card.header>
            <x-card.title>
                {{ __('Оставьте заявку') }}
            </x-card.title>
    
            <x-slot name="right">
                <x-move-back href="{{ route('user.posts') }}">
                    {{ __('Назад') }}
                </x-move-back>
            </x-slot>
        </x-card.header>
    
        <x-form.create />
    </x-card.body>
    
@endsection