@extends('layouts.main')

@section('page.title', 'Мои заявки')

@section('main.content')
    <x-card.body>
        <x-card.header>
            <x-card.title>
                {{ __('Мои заявки') }}
            </x-card.title>
            <div class="right-section">
                @if (! empty($posts))
                    <x-button href="{{ route('user.posts.create') }}">
                        {{ __('Редактировать заявки') }}
                    </x-button>
                @endif
                <x-button href="{{ route('user.posts.create') }}">
                    {{ __('Оставить заявку') }}
                </x-button>
            </div>
        </x-card.header>
    
        @if (empty($posts))
            <x-card.subtitle>
                {{ __('Нет заявок') }}
            </x-card.subtitle>
    
            @else
            <x-posts-container>
                @foreach ($posts as $post)
                    <x-post :post=$post/>
                @endforeach
            </x-posts-container>
        @endif

        <div class="pagination">
            {{ $posts->links('vendor.pagination.default') }}
        </div>

    </x-card.body>

@endsection