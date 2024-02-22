<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'Prenom' => 'required|string|max:255',
            'Nom' => 'required|string|max:255',
            'email' => 'required|string|min:8|unique:users',
            'password' => 'required|string|min:8|confirmed'
    ]);
    
    if (session()->has('errors')) {
        return redirect()->back()->withErrors($request->errors);
    }else{
    $user = new User();
    $user->prenom = $request->input('Prenom');
    $user ->Nom = $request->input('Nom');
    $user->email = $request->input('email');
    $user->mdp = Hash::make($request->input('password'));
    $user->save();
    return redirect()->route('Index.Login');
    }
    }
}
