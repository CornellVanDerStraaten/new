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

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="screen-minus-dashboard-header bg-gray-100">

            <x-dashboard.nav />

            @isset($breadcrumbs)
                {{ $breadcrumbs }}
            @endisset

            <main class="m-1">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewire('wire-elements-modal')
        @livewireScripts
    </body>
</html>
