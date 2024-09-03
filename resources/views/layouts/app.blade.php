<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
        <div class="pt-8 pl-10">


            <!-- Breadcrumb -->
            <nav class="flex pb-3 text-gray-700 " aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-400">
                            DASHBOARD
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="font-medium text-gray-400">/</span>
                            <a href="#" class="ms-1 text-sm font-medium text-gray-400">EVENT ORGANIZER DASHBOARD</a>
                        </div>
                    </li>
                </ol>
            </nav>

            {{ $slot }}
        </div>

    </main>

    @livewireScripts
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/script.js') }}"></script>

</body>

</html>
