<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image" content="https://i.imgur.com/dtkR0hE.png" />
    <meta property="twitter:image" content="https://i.imgur.com/dtkR0hE.png" />
    <meta name="description" content="Lurking Skull is an indie game studio based in Saudi Arabia, specializing in creating captivating horror games. With a focus on immersive storytelling and atmospheric gameplay, the studio crafts unique and bone-chilling experiences that will leave players on the edge of their seats. Delve into the depths of terror and prepare for unforgettable nightmares with Lurking Skull, the Saudi indie game studio that brings fear to life.">
    <title>Lurking Skull</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-stone-950 bg-gif-background">
    <div class="flex items-center justify-center h-screen">
        <div class="text-white text-center animate__animated animate__fadeInDown flex flex-col items-center">
          <div class="image-container"></div>
          <div class="flex flex-col items-center justify-center px-5 max-w-screen-md">
            <h2 class="text-xl md:text-4xl mb-4">Saudi indie game studio crafting chilling horror experiences. 
              We aim to create unforgettable scares through atmospheric environments and innovative gameplay.</h2>
          </div>
        </div>
      </div>
    @include('components.footer')
</body>

</html>
