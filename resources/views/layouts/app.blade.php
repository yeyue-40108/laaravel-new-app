<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- tailwindcss -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body class="flex flex-col h-screen">
    <header class="bg-green-500 p-4 mb-5">
        @include('layouts.header')
    </header>

    <main class="mb-5 mx-20">
        @yield('content')
    </main>

    <footer class="bg-green-500 p-4 mt-auto">
        @include('layouts.footer')
    </footer>
    @stack('scripts')
</body>

</html>