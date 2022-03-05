@extends('layouts.main')

@section('page.title', 'Редактировать заявку', '$post->id')

@section('main.content')

    <x-card.header>
        <x-card.title>
            {{ __('Измените свою заявку') }}
        </x-card.title>

        <x-slot name="right">
            <x-move-back href="{{ route('user.posts.show', $post->id) }}">
                {{ __('Отмена') }}
            </x-move-back>
        </x-slot>
    </x-card.header>

    <x-form.edit :post="$post" />
    
@endsection