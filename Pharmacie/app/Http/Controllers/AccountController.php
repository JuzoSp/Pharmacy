<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //Landing Page
    public function welcome()
    {
        return view('welcome');
    }

    //Login Page
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {

        return view('auth.register');
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user', // Set the default role to 'user'
        ]);
    }
}
