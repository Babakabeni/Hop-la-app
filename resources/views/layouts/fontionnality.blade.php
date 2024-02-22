<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <div class="first_bloc">
        <p id="first_para">Soins de médecine générale</p>
        <h1>Le nouvel hôpital</h1>
        <p id="second_para">Nous sommes les meilleurs médecins de la famille et de la santé</p>
    </div>


    <div class="second_bloc">
        <div class="bloc_bouton">
            <a href="{{ route('index.fiche')}}"><input type="button" value="Nouvelle fiche"></a>
            <a href="{{ route('index.listFiche')}}"><input type="button" value="Fiches patients"></a>
            <a href="#"><input type="button" value="Rendez-vous"></a>
            <a href="liste_medecin.html"><input type="button" value="Liste medécins"></a>
        </div>
    </div>


    <div class="solution">
        <div class="bloc_infos">
            <p id="title">INSCRIPTION</p>
        </div>
        <div class="bloc_img">
            <img src="/images/solution medicale.jpg" alt="" height="320px" width="350px">
        </div>
    </div>
    </x-slot>
</x-app-layout>