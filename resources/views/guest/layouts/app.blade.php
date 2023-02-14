<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', 'DC Comics')
    </title>

    <link rel="icon" type="image/x-icon" href="/resources/assets/img/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        {{--Mettere un header utilizzando include--}}
        @include('partials.header')
    </header>
    

    <main class="bg-light">
        @yield('jumbo')
        @yield('button')
        @yield('main-content')
    </main>

    <footer>
        {{--Mettere un footer utilizzando include--}}
        @include('partials.footer')
    </footer>

</body>

</html>