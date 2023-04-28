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
        <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <style>
        /* alpine hide elements while page loads */
        [x-cloak] {
          display: none;
        }
      </style>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main>
                <div x-data class="h-screen antialiased">
                    <div class="w-screen bg-body-gray antialiased flex relative">
                        @include('layouts.admin.components.top-navigation')
                        @include('layouts.admin.components.sidenavigation')
                      <div class="w-full px-5  sm:px-10 mx-auto mt-16">
                        {{ $slot }}
                      </div>
                    </div>
                </div>
            </main>
        </div>
        <script>
            feather.replace();
          </script>
    </body>
</html>
