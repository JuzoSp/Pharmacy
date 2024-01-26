<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My App</title>
    <link rel="stylesheet" href="{{ asset('fonts/bootstrapIcons/bootstrap-icons.css') }}">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col w-full justify-center items-center">
        <div class="flex flex-row w-full h-[54px] justify-between items-center p-3 bg-blue-300">
            <span>My App</span>
            <a type="button" class="bg-blue-500 shadow-sm text-white p-2 rounded-md"
                href="{{ route('register.customer') }}">S'inscrire</a>
        </div>
        <div>
            Hello Login
        </div>
    </div>
</body>

</html>
