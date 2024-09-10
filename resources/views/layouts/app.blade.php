<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This website is about manage events.">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Event Metro') }}</title>

        <!-- Style css  !-->
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
        @livewireStyles
    </head>

    <body class="text-gray-800 font-inter flex items-center justify-center" style="background: #edf2f7;">

        <!-- Sidenav start -->
        @include('layouts.partials.sidebar')
        <!-- Sidenav end -->

        <main class="w-full bg-white md:w-[calc(100%-256px)] md:ml-64 min-h-screen transition-all main">
            <!-- Navbar Start -->
            @include('layouts.partials.navbar')
            <!-- Navbar End -->
            <div class="pt-8 px-10">

                <!-- Breadcrumb Start -->
                @include('layouts.partials.breadcrumb')
                <!-- Breadcrumb End -->

                <div class="{{ Route::is('*.index') ? 'px-0' : 'px-12' }} mt-5">
                    {{ $slot }}
                </div>
            </div>

        </main>

        @livewireScripts
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('assets/script.js') }}"></script>

    </body>

</html>
