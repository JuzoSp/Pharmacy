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
        return view('index', ['magasins' => $magasins]);
    }

    //Créer
    public function create()
    {
        return view('create');
    }

    //Ajouter
    public function store(Request $request)
    {
        $magasin = new Magasin();
        $magasin->nom = $request->input('nom');
        $magasin->adresse = $request->input('adresse');
        $magasin->ville = $request->input('ville');
        $magasin->code_postal = $request->input('code_postal');
        $magasin->save();

        return redirect('/magasin');
    }
}
