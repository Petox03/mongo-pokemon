<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="icon" href="img/th-1789345218.png">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
    <title>PokeApp</title>

</head>

<body class="antialiased">

    <header>
        @component('components.navbar')
        @endcomponent
    </header>

    <main class="relative top-[4rem] p-5">
        
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @livewireScripts
</body>

</html>
