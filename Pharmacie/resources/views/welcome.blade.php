<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmacie App</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col w-full justify-center items-center">
    <div class="flex w-full h-[54px] justify-between items-center p-3 bg-blue-300">
        My App
        @if (Route::has('login'))
            <a type="button" href="{{ route('login') }}" class="bg-blue-500 shadow-sm text-white p-2 rounded-md">Login
            </a>
        @endif
    </div>
    <div class="flex">
        Div Two
    </div>
</body>

</html>
