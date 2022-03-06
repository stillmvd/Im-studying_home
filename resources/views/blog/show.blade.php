@extends('layouts.main')

@section('page.title', $post->id)

@section('main.content')

    <x-card.body>
        <x-card.header>
            <x-post.title>
                {{ $post->alias }}
            </x-post.title>
            <x-move-back href="{{ route('blog') }}">
                Назад
            </x-move-back>
        </x-card.header>
        
        <x-post.date>
            {{ now()->format('d.M.y H:i') }}
        </x-post.date>
        <x-post.text>
            {!! $post->description !!}
        </x-post.text>
    </x-card.body>
    
@endsection