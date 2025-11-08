<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @if (session('error'))
            <div x-data="{ show: true }" x-show="show" x-transition.opacity.duration.200ms
                class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 w-full max-w-md relative">

                    <!-- Judul -->
                    <h2 class="text-lg font-semibold text-red-600 dark:text-red-400 flex items-center gap-2">
                        ⚠️ Akses Ditolak
                    </h2>

                    <!-- Pesan -->
                    <p class="mt-2 text-gray-700 dark:text-gray-300">
                        {{ session('error') }}
                    </p>

                    <!-- Tombol tutup -->
                    <div class="mt-4 text-right">
                        <button @click="show = false" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md text-sm">
                            Tutup
                        </button>
                    </div>

                </div>
            </div>
        @endif

        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
</html>
