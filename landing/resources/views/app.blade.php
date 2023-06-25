<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead


        <!-- Display -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Identity -->
        <title>Shock - Creative Multipurpose Bootstrap 5 Template</title>
        <meta name="description" content="Shock is a creative multipurpose theme for building websites. It is based on Bootstrap 5 and other of the best and most up-to-date code libraries used by professional developers in the world.">
        <meta name="author" content="Codings">
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />

        <!-- Vendor Style Sheet -->
        <link rel="stylesheet" href="assets/css/vendor/preloader.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/font-family.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/menu-engine.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/menu-grid.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/swiper.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/dynamic-slider.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/bricklayer.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/lightbox.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/aos.min.css" />

        <!-- Main Style Sheet -->
        <link rel="stylesheet" href="assets/css/theme.css" />
        <link rel="stylesheet" href="assets/css/core.css" />
        <link rel="stylesheet" href="assets/css/main.css" />

    </head>
     <body class="shock-body">

        @inertia

        <!-- Vendor JavaScript -->
        <script src="assets/js/vendor/jquery.min.js"></script>
        <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/vendor/preloader.min.js"></script>
        <script src="assets/js/vendor/inview.min.js"></script>
        <script src="assets/js/vendor/menu-engine.min.js"></script>
        <script src="assets/js/vendor/menu-grid.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/swiper.min.js"></script>
        <script src="assets/js/vendor/anime.min.js"></script>
        <script src="assets/js/vendor/dynamic-slider.min.js"></script>
        <script src="assets/js/vendor/shuffle.min.js"></script>
        <script src="assets/js/vendor/stickybits.min.js"></script>
        <script src="assets/js/vendor/bricklayer.min.js"></script>
        <script src="assets/js/vendor/lightbox.min.js"></script>
        <script src="assets/js/vendor/typed.min.js"></script>
        <script src="assets/js/vendor/progressbar.min.js"></script>
        <script src="assets/js/vendor/map-styles.min.js"></script>
        <script src="assets/js/vendor/magnetic-effect.min.js"></script>
        <script src="assets/js/vendor/gsap.min.js"></script>
        <script src="assets/js/vendor/aos.min.js"></script>
        <script src="assets/js/vendor/lax.min.js"></script>
        <script src="assets/js/vendor/cursor-effect.min.js"></script>

        <!-- Main JavaScript -->
        <script src="assets/js/main.js"></script>
    </body>
</html>
