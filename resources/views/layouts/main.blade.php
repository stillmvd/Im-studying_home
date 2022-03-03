@extends('layouts.base')

@section('content')
    <main>
        <x-container>
            <x-card.body>
                @yield('main.content')
            </x-card.body>
        </x-container>
    </main>
@endsection