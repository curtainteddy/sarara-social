<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Sarara' }}</title>
        
        {{-- ... --}}
        
        @vite('resources/js/app.js')
        @vite('resources/sass/app.scss')
        
        
        @livewireStyles
    </head>
    <body class="font-sans bg-slate-200 dark:bg-neutral-950">
        @livewire('partials.navbar')
        <main>
            {{ $slot }}
        </main>
        @livewire('partials.footer')
        @livewireScripts
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />
    </body>
</html>
