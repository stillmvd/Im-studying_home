@extends('layouts.main')

@section('page.title', $post->alias)

@section('main.content')

    <x-card.body>
        <x-card.header>
            <x-post.title>
                {{ $post->alias }}
            </x-post.title>
            <div class="right-section">
                <x-move-back href="{{ route('blog') }}">
                    Назад
                </x-move-back>
                @if ($post->user_id == auth()->id())
                    <a href="{{ route('user.posts.edit', $post->id) }}" class="change-button">
                        Редактировать заявку
                    </a>
                @endif
            </div>
        </x-card.header>
        
        <x-post.date>
            {{ now()->format('d.M.y H:i') }}
        </x-post.date>
        <hr class="bigsep">
        <x-post.text>
            {!! $post->description !!}
        </x-post.text>
    </x-card.body>
    
@endsection