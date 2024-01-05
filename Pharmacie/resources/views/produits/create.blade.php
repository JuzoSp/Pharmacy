<div class="w-full flex jsutify-center items-center">
    <form method="POST" class="w-full h-auto flex justify-center items-center"
        action="{{ isset($prod) ? route('produits.update', ['id' => $prod->id]) : route('produits.store') }}">
        @csrf
        @if (isset($prod))
            @method('PUT')
        @endif
        {{-- Ajouter les champs pour le formulaire d'ajout ou d'édition --}}
        <label for="nom_produit">Nom:</label>
        <input type="text" name="nom_produit" class="w-[130px] h-[18px] rounded"
            value="{{ isset($prod) ? $prod->nom : '' }}">
        <label for="prix">Prix:</label>
        <input type="text" name="prix" class="w-[130px] h-[18px] rounded"
            value="{{ isset($prod) ? $prod->prix : '' }}">
        <label for="description">Description:</label>
        <input type="text" name="description" class="w-[130px] h-[18px] rounded"
            value="{{ isset($prod) ? $prod->prix : '' }}">
        {{-- Autres champs pour les détails du produit --}}
        <button type="submit"
            class="px-2 py-2 rounded bg-blue-500 text-white">{{ isset($prod) ? 'Modifier' : 'Ajouter' }}</button>
    </form>
</div>
