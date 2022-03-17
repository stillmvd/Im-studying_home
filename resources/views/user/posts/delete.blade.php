@extends('layouts.main')

@section('page.title', 'Удаление заявок')

@section('main.content')
    <x-card.body>
        <x-card.header>
            <x-card.title>
                {{ __('Ваши заявки') }}
            </x-card.title>
            <div class="right-section">
                <x-button href="{{ route('user.posts') }}">
                    {{ __('Вернуться назад') }}
                </x-button>
            </div>
        </x-card.header>
        
        @if (empty($posts))
            <x-card.subtitle>
                {{ __('Всё удалено )') }}
            </x-card.subtitle>
    
            @else
            <x-posts-container>
                @foreach ($posts as $post)
                    <x-ready :post=$post/>
                @endforeach
            </x-posts-container>
        @endif

        <div class="pagination">
            {{ $posts->links('vendor.pagination.default') }}
        </div>

    </x-card.body>

@endsection