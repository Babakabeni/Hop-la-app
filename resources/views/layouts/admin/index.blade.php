<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des utilisateurs') }}
        </h2>

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
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fonction</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->Nom}}</td>
                        <td>{{$user->Email}}</td>
                        <td>{{$user->Fonction}}</td>
                        <td>
                            <a href="{{ route('show.Admin', ['id' => $user->id])}}" class="btn btn-success">Modifier</a>
                            <form action="{{ route('delete.Admin', ['id' => $user->id]) }}" method="post">
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