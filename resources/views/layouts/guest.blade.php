<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Welcome | Slope Risk Management System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        <div class="w-full sm:max-w-md mt-6 bg-white shadow-md overflow-hidden rounded-2xl">
            <div class="flex justify-center items-center bg-cover bg-center h-36"
                style="background-image: url('/components/guest-bg.webp')">
                <div class="flex items-center text-white uppercase font-bold">
                    <x-srms-logo class="h-10 mr-3" />
                    <p>Slope Risk<br> Management System</p>
                </div>
            </div>
            <div class="px-6 py-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>