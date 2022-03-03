@extends('layouts.base')

@section('content')
    <main class="no-grow">
        <x-container>
            <x-card.body>
                @yield('auth.content')
            </x-card.body>
        </x-container>
    </main>
@endsection

<script src="{{ asset('js/register.js') }}"></script>