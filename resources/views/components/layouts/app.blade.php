<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>{{ config('app.name', 'Ivyhoot') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @livewireStyles
</head>

<body class="d-flex flex-column min-vh-100">
    <div>
        <livewire:NavComp />
    </div>
    
    <main class="flex-fill bg-dark-subtle">
        
        <div class="shadow container bg-white rounded p-5 my-5" style="min-height: 650px">
            {{ $slot }}
        </div>
    </main>

    @livewireScripts
</body>

</html>
