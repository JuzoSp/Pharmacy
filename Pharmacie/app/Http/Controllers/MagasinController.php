<?php

namespace App\Http\Controllers;

use App\Models\Magasin;
use Illuminate\Http\Request;

class MagasinController extends Controller
{
    //Affichage
    public function index()
    {
        $magasins = Magasin::all();
        return view('Magasin.index', ['magasins' => $magasins]);
    }

    //Créer
    public function create()
    {
        return view('Magasin.create');
    }

    //Enregistrer
    public function store(Request $request)
    {
        $magasin = new Magasin();
        $magasin->nom = $request->input('nom');
        $magasin->adresse = $request->input('adresse');
        $magasin->ville = $request->input('ville');
        $magasin->code_postal = $request->input('code_postal');
        $magasin->save();

        return redirect('/magasin')->with('success', 'Magasin ajouté avec succès');
    }

    //Supprimer
    public function destroy($id)
    {
        $magasin = Magasin::findOrFail($id);
        $magasin->delete();

        return redirect('/magasin')->with('success', 'Magasin supprimé avec succès');
    }
}
