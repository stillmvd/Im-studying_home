@extends('layouts.main')

@section('page.title', 'Мои заявки')

@section('main.content')

    <x-card.header>
        <x-card.title>
            {{ __('Мои заявки') }}
        </x-card.title>
        <x-slot name="right">
            <x-button href="{{ route('user.posts.create') }}">
                {{ __('Оставить заявку') }}
            </x-button>
        </x-slot>
    </x-card.header>


    @if (empty($posts))
        <x-card.subtitle>
            {{ __('Вы ещё не оставили ни одной заявки') }}
        </x-card.subtitle>
        
        @else
        <x-posts-container>
            @foreach ($posts as $post)
                <x-post.card>
                    <x-post.title href="{{ route('user.posts.show', $post->id) }}">
                        {{ $post->alias }}
                    </x-post.title>
                    <x-post.date>
                        {{ now()->format('d.m.y - H.i.s') }}
                    </x-post.date>
                </x-post.card>
            @endforeach
        </x-posts-container>
    @endif

@endsection