<?php

namespace App\Http\Controllers;

use App\Http\Repository\FicheRepository;
use App\Models\Fiches;
use App\Models\User;
use Illuminate\Http\Request;

class FicheController extends Controller
{
    /**
     * @var $repo;
     */
    private $repo;
    public function __construct(FicheRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $users = User::where('Fonction', 'Médecin')->get();
        return view('layouts.fiche', compact('users'));
    }

    public function new(Request $request)
    {
        $this->validate($request, [
            'Nom' => 'required|string|max:255',
            'PostNom' => 'required|string|max:255',
            'PreNom' => 'required|string|max:255',
            'Date' => 'required|date',
            'Tel' => 'required',
            'Adresse' => 'required|string',
            'Medecin' => 'required|string',
        ]);
        if(session()->has('errors')){
            dd($request->all());
            return redirect()->back()->withErrors($request->errors);
        }else{
        $Fiche = new Fiches();
        $Fiche->Nom = $request->input('Nom');
        $Fiche->PostNom = $request->input('PostNom');
        $Fiche->PreNom = $request->input('PreNom');
        $Fiche->DateNaiss = $request->input('Date');
        $Fiche->Tel = $request->input('Tel');
        $Fiche->Sexe = $request->input('Sexe');
        $Fiche->Adresse = $request->input('Adresse');
        $Fiche->Medecin = $request->input('Medecin');
        $Fiche->from_id = $this->repo->getIdUser($request->input('Medecin'));
        $Fiche->save();
        return redirect()->route('index.listFiche');
    }
    }
}
