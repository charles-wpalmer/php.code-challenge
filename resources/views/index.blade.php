<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SimpleStream | Code Test</title>

    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="grid h-screen antialiased bg-slate-100 lg:items-center">

    <livewire:booking-form />

    @livewireScripts
    @stack('scripts')

</body>

</html>
