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

    <h1 class="title">Liste de fiche des patients</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button type="button" class="close-btn" onclick="closeAlert()">Fermer</button>
        </div>
        <script>
            function closeAlert() {
                document.querySelector('.alert').style.display = 'none';
            }
        </script>
    @endif
    <div class="solution">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Post Nom</th>
                    <th scope="col">Pre Nom</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fiches as $fiche)
                    <tr>
                        <td scope="row">{{$fiche->id}}</td>
                        <td>{{$fiche->Nom}}</td>
                        <td>{{$fiche->PostNom}}</td>
                        <td>{{$fiche->PreNom}}</td>
                        <td>
                            <a href="{{ route('show.fiche', ['id' => $fiche->id])}}" class="btn btn-success">Modifier</a>
                            <form action="{{ route('delete.fiche', ['id' =>$fiche->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>    
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </x-slot>
</x-app-layout>