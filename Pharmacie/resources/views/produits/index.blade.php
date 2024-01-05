<div>
    @foreach ($produit as $a)
        <ul>
            <label for="nom_produit">Nom du Produit</label>
            <p>{{ $a->nom_produit }}</p>
            <label for="prix">Prix</label>
            <p>{{ $a->prix }}</p>
            <label for="description">
                Description:
            </label>
            <p>{{ $a->description }}</p>
        </ul>
    @endforeach
</div>
