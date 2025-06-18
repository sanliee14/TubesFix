<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    </head>
    
    <body class="font-sans antialiased">

        @if (!request()->is('login') && !request()->is('register'))
            @if(Auth::user()->role == 'user')
            <div class="min-h-screen bg-center" style="background-image: url('{{ asset('images/wall.jpg') }}')">
                @include('layouts.navigation')
            @elseif(Auth::user()->role == 'eo')
            <div class="min-h-screen bg-center" style="background-image: url('{{ asset('images/2.png') }}')">
                @include('eo.navbar')
            @elseif(Auth::user()->role == 'admin')
            <div class="bg-cover bg-center min-h-screen" style="background-image: url('{{ asset('images/66.jpg') }}');">
                @include('admin.nav')
            @endif
        @endif

            <!-- Page Heading -->
            @isset($header)
                <header class="">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
             <main>
            {{ $slot }}
        </main>
        </div>
    </body>
</html>
