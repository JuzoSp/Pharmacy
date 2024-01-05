<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{

    public function dashboard()
    {
        return view('superadmin.dashboard');
    }

    // Autres méthodes pour gérer les fonctionnalités du super administrateur
}
