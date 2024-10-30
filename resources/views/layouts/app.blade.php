<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This website is about manage events.">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Event Metro') }}</title>

        <!-- Style css  !-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select2.css') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        @livewireStyles
        @yield('style')
    </head>

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

            <div>
                {{ $slot }}
            </div>
        </div>

    </main>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select2.js') }}"></script>
    <script>
        var options = {
            searchable: true,
            placeholder: 'select',
            searchtext: 'zoek',
            selectedtext: 'item selected'
        };
        NiceSelect.bind(document.getElementById("seachable-select"), options);
    </script>
    @livewireScripts
    @yield('script')

    </body>

</html>
