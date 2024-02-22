<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        if(Auth::user()->Fonction != "Admin")
        {
            return redirect()->route('dashboard')->with('succes', 'Vous n\'avez pas l\'autorisation d\'acceder a l\'administration!');
        }
        return view('layouts.admin.index', [
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::FindOrFail($id);
        return view('layouts.admin.show', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if($user){
            $user->update($request->all());
            return redirect()->route('index.Admin')->with('success', 'Utilisateur modifier avec succès!');
        }
    }
    
    public function delete($id)
    {
        $user = User::find($id);
        if($user)
        {
            $user->delete();
            return redirect()->route('index.Admin')->with('success', 'Utilisateur supprimé avec succès!');
        }
    }
}
