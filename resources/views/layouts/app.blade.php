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
        @livewireStyles
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
        <script>
            const sidebar = document.getElementById('sidebar');

            if (sidebar) {
                const toggleSidebarMobile = (sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose) => {
                    sidebar.classList.toggle('hidden');
                    sidebarBackdrop.classList.toggle('hidden');
                    toggleSidebarMobileHamburger.classList.toggle('hidden');
                    toggleSidebarMobileClose.classList.toggle('hidden');
                }

                const toggleSidebarMobileEl = document.getElementById('toggleSidebarMobile');
                const sidebarBackdrop = document.getElementById('sidebarBackdrop');
                const toggleSidebarMobileHamburger = document.getElementById('toggleSidebarMobileHamburger');
                const toggleSidebarMobileClose = document.getElementById('toggleSidebarMobileClose');
                const toggleSidebarMobileSearch = document.getElementById('toggleSidebarMobileSearch');

                toggleSidebarMobileSearch.addEventListener('click', () => {
                    toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
                });

                toggleSidebarMobileEl.addEventListener('click', () => {
                    toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
                });

                sidebarBackdrop.addEventListener('click', () => {
                    toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
                });
            }
        </script>
    </body>

</html>
