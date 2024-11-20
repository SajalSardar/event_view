<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This website is about manage events.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Event Metro') }}</title>

    <!-- Style css  !-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
            {{ $slot }}
        </div>
    </main>

    @livewireScripts
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/script.js') }}"></script>
    @stack('script')

</body>

</html>