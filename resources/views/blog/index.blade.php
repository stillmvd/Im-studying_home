@extends('layouts.main')

@section('page.title', 'Страница заявок')

@section('main.content')
    <x-card.body>
        @include('blog.filter')
    </x-card.body>

    <x-card.body>
        <x-card.header>
            <x-card.title>
                {{ __('Заявки наших клиентов') }}
            </x-card.title>
            <x-slot name="right">
                <x-button href="{{ route('user.posts.create') }}">
                    {{ __('Оставить заявку') }}
                </x-button>
            </x-slot>
        </x-card.header>
        
        @if (empty($posts))
            <x-card.subtitle>
                {{ __('Нет заявок') }}
            </x-card.subtitle>
    
            @else
            <x-posts-container>
                @foreach ($posts as $post)
                    <x-blog.post :post="$post" />
                @endforeach
            </x-posts-container>
        @endif
    </x-card.body>

@endsection