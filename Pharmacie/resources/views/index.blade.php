<!DOCTYPE html>
<html>

<head>
    <title>Magasins</title>
</head>

<body>
    <h1>List of Magasins</h1>
    <ul>
        @foreach ($magasins as $magasin)
            <li>{{ $magasin->nom }} - {{ $magasin->adresse }} - {{ $magasin->ville }} - {{ $magasin->code_postal }}</li>
            <!-- Add other fields as needed -->
        @endforeach
    </ul>
</body>

</html>
