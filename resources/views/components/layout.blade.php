<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>sbb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
    <nav class="border-b-4 flex justify-around">
        <a href="/">home</a>
        <ul class="flex gap-4 p-2">
            <li>
                <a href="/about">about</a>
            </li>
            <li>
                <a href="/classes">classes</a>
            </li>
            <li>
                <a href="/presentations">presentations
                </a>
            </li>
        </ul>
        <ul class="flex gap-4 p-2">
            <li>
                <a href="/login">login</a>
            </li>
            <li>
                <a href="/classes">register</a>
            </li>
        </ul>
    </nav>
    <main class="h-screen">{{ $slot }}</main>
    <footer class="border-t-4 text-center my-8 p-8 font-extrabold">FOOTER</footer>
</body>

</html>
