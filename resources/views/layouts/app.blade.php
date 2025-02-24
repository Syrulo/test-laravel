<!DOCTYPE html>
<html lang="en" class="bg-mycolor font-serif text-white">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.jsdelivr.net/npm/heroicons@1.0.5/outline/academic-cap.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Mon application Laravel</title>
    </head>

    <body>
        <header>
            @include('layouts.navbar')
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>