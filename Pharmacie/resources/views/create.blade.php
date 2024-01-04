<!DOCTYPE html>
<html>

<head>
    <title>Ajouter un Magasin</title>
</head>

<body>
    <h1>Ajouter un Magasin</h1>
    <form method="POST" action="{{ route('magasins.store') }}">
        @csrf
        <label for="nom">Nom du Magasin:</label><br>
        <input type="text" id="nom" name="nom"><br>

        <label for="adresse">Adresse:</label><br>
        <input type="text" id="adresse" name="adresse"><br>

        <label for="ville">Ville:</label><br>
        <input type="text" id="ville" name="ville"><br>

        <label for="code_postal">Code Postal:</label><br>
        <input type="text" id="code_postal" name="code_postal"><br><br>

        <input type="submit" value="Ajouter">
    </form>
</body>

</html>
