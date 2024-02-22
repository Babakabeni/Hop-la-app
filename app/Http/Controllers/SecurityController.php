<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function index()
    {
        return view('Login');
    }

    public function auth(Request $request)
    {
        dd($request);
        $this->validate($request, [
            'Nom' => 'required|string|max:255',
            'password' => 'required|string|min:8|'
        ]);
        $credentials = $request->only('Nom', 'password');
        $user = auth()->attempt($credentials);
        if(session()->has('errors')) {
            return redirect()->back()->withErrors($request->errors);
        }else{
        if($user)
        {
            // auth réussi
            return redirect()->route('Home');
        }else{
            // auth échou
            return redirect()->back()->withErrors(['Nom' =>'Les informations d\'authentification sont incorrectes']);
        }
    }
    }
}