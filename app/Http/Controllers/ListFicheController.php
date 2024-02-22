<?php

namespace App\Http\Controllers;

use App\Http\Repository\FicheRepository;
use App\Models\Fiches;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListFicheController extends Controller
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
        if(Auth::user()->Fonction === "Réceptionniste"){
        $fiches = Fiches::all();
        }
        else{
            $fiches = $this->repo->getFiche(Auth::user()->id);
        }
        return view('layouts.listefiche', [
            'fiches' => $fiches
            ]);
    }
     public function show($id)
     {
        $fiche = Fiches::find($id);
        return view('layouts.ficheUp', [
            'fiche' => $fiche
        ]);
     }

     public function update(Request $request, $id)
     {
        $this->validate($request, [
            'Nom' => 'required|string|max:255',
            'PostNom' => 'required|string|max:255',
            'PreNom' => 'required|string|max:255',
            'Date' => 'required|date',
            'Tel' => 'required',
            'Adresse' => 'required|string',
            'Antec' => 'required|string',
            'Medoc' => 'required|string',
            'Resultatt' => 'required|string',
        ]);
        if(session()->has('errors')){
            return redirect()->back()->withErrors($request->errors);
        }else{
        $Fiche =  Fiches::find($id);
        $Fiche->Nom = $request->input('Nom');
        $Fiche->PostNom = $request->input('PostNom');
        $Fiche->PreNom = $request->input('PreNom');
        $Fiche->DateNaiss = $request->input('Date');
        $Fiche->Tel = $request->input('Tel');
        $Fiche->Sexe = $request->input('Sexe');
        $Fiche->Adresse = $request->input('Adresse');
        $Fiche->Ante = $request->input('Antec');
        $Fiche->Medoc = $request->input('Medoc');
        $Fiche->ResultatLabo = $request->input('Resultatt');
        $Fiche->save();
        return redirect()->route('index.listFiche')->with('success', 'Fiche mise à jour avec succès!');
    }
     }

     public function delete($id)
    {
        $fiche = Fiches::findOrFail($id);
        $fiche->delete();
        return redirect()->route('index.listFiche')->with('success', 'Fiche supprimée avec succès!');
    }
}
