@extends('layouts.base')

@section('content')
    <main class="no-grow">
        <x-container>
            @yield('auth.content')
        </x-container>
    </main>
@endsection

<script src="{{ asset('js/register.js') }}"></script>