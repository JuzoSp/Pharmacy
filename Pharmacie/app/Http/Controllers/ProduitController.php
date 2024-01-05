<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    //
    public function index()
    {
        $produit = DB::table('produits')
            ->select('id', 'nom_produit', 'description', 'prix')
            ->get();
        // dd($produit);
        return view('produits.index', compact(['produits']));
    }

    public function create()
    {
        return view('produits.create');
    }

    public function store(Request $req)
    {

        $prod = new Produit();
        $prod->nom_produit = $req->input('nom_produit');
        $prod->prix = $req->input('prix');
        $prod->description = $req->input('description');
        $prod->save();
        // Redirection vers la liste des produits avec un message de succès
        return redirect()->route('produits.index')->with('success', 'Produit créé avec succès.');
    }

    public function edit()
    {
        return;
    }


    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->update($request->only(['nom', 'prix']));
        // Autres mises à jour si nécessaire
        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès.');
    }


    public function destroy()
    {
    }
}
