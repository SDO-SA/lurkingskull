<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lurking Skull</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-stone-950 bg-gif-background">
    <div class="flex items-center justify-center h-screen">
        <div class="text-white text-center">
            <h1 class="text-5xl mb-6">Coming Soon...</h1>
            <h2 class="text-4xl mb-4">Follow Us</h2>
            <a href="https://twitter.com/Lurking_Skull"><i class="fa-brands fa-x-twitter text-3xl"></i></a>
        </div>
    </div>
    @include('components.footer')
</body>

</html>
