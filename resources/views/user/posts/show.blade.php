@extends('layouts.main')

@section('page.title', $post->id)

@section('main.content')

    <x-card.header>
        <x-move-back href="{{ route('user.posts') }}">
            {{ __('Назад') }}
        </x-move-back>
        
        <x-button href="{{ route('user.posts.edit', $post->id) }}">
            {{ __('Редактирвовать заявку') }}
        </x-button>
    </x-card.header>
    
    <x-post.title>
        {{ $post->alias }}
    </x-post.title>
    <x-post.date>
        {{ now()->format('d.m.y H.i.s') }}
    </x-post.date>
    <x-post.text>
        {{ $post->description }}
    </x-post.text>
    
@endsection