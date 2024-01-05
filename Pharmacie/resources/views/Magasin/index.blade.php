<!DOCTYPE html>
<html>

<head>
    <title>Magasins</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1>Liste des Magasins</h1>
    @if (session('success'))
        <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-600 font-medium">
            {{ session('success') }}
        </div>
    @endif
    <ul>
        @foreach ($magasins as $magasin)
            <li>{{ $magasin->nom }} - {{ $magasin->adresse }} - {{ $magasin->ville }} - {{ $magasin->code_postal }}</li>
            <form method="POST" action="{{ route('magasin.destroy', ['id' => $magasin->id]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-2 py-3 rounded">Supprimer</button>
            </form>
        @endforeach
    </ul>
</body>

</html>
