<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="img/th-1789345218.png">
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @livewireStyles
        <title>{{ $title ?? 'PokeApp' }}</title>
    </head>

    <body class="antialiased">

        <header>
            @component('components.navbar')
            @endcomponent
        </header>

        <main class="relative top-[4rem] p-5">
            {{ $slot }}
        </main>

        @livewireScripts
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <script>
            Livewire.on('pokemonDeleted', () => {
                Swal.fire({
                    title: "El pokemon ha sido liberado",
                    text: "Ahora vive libre en el mundo",
                    icon: "info"
                });
            });
            Livewire.on('pokemonChanged', () => {
                Swal.fire({
                    title: "El nombre del pokemon ha cambiado",
                    text: "Ahora tiene un apodo cool",
                    icon: "info"
                });
            });
            Livewire.on('catch', function(data){
                Swal.fire({
                    title: data.msg,
                    icon: data.icon
                });
            });
        </script>
    </body>
</html>
