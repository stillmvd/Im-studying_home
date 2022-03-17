@extends('layouts.main')

@section('page.title', 'Удаление заявок')

@section('main.content')
    <x-card.body>
        <x-card.header>
            <x-card.title>
                {{ __('Удаление заявок') }}
            </x-card.title>
            <div class="right-section">
                <x-button href="{{ route('user.posts') }}">
                    {{ __('Вернуться назад') }}
                </x-button>
            </div>
        </x-card.header>
        
        @if (empty($posts))
            <x-card.subtitle>
                {{ __('Всё удалено :)') }}
            </x-card.subtitle>
    
            @else
            <x-posts-container>
                @foreach ($posts as $post)
                    <x-ready :post=$post/>
                @endforeach
            </x-posts-container>

            @if ($number > 6)
                <div class="pagination">
                    {{ $paginated->links('vendor.pagination.default') }}
                </div>
            @endif
        @endif

    </x-card.body>

@endsection