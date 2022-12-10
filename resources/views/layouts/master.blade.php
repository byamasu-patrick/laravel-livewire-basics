<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title> <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Nucleo Icons -->
        <link href="./css/nucleo-icons.css" rel="stylesheet" />
        <link href="./css/nucleo-svg.css" rel="stylesheet" />
        <!-- Popper -->
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <!-- Main Styling -->
        <link href="./css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased w-full">
        @yield('content')
        
        @livewireScripts
        
        <!-- plugin for charts  -->
        <script src="./js/plugins/chartjs.min.js" async></script>
        <!-- plugin for scrollbar  -->
        <script src="./js/plugins/perfect-scrollbar.min.js" async></script>
        <!-- github button -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- main script file  -->
        <script src="./js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>
    </body>
</html>
