<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fiche patient</title>
    <link rel="stylesheet" href="css/fiche_patient.css">
</head>
<body>
    <div class="formulaire">
        <form action="{{ route('new.fiche') }}" method="post">
            @csrf
            <h1>FICHE DU PATIENT</h1>
            <fieldset>
                <legend>Données Démographique</legend>
                <div class="un my_input">
                    <input type="text" name="Nom" placeholder="Nom">
                    <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('Nom') }}
                        </div>
                    <input type="text" name="PostNom" placeholder="Postnom">
                    <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('PostNom') }}
                        </div>
                </div>
                <div class="deux my_input">
                    <input type="text" name="PreNom" placeholder="Prenom">
                    <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('PreNom') }}
                        </div>
                    <input type="date" name="Date" id="" value="Date">
                    <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('Date') }}
                        </div>
                </div>
                <div class="trois my_input">
                    <input type="tel" name="Tel" placeholder="Numéro">
                    <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('Tel') }}
                        </div>
                </div>
                <div class="Quatre">
                    
                </div>
                <div class="cinq my_input">
                    <input type="radio" id="option1" name="Sexe" value="Homme">
                    <label for="option1">Homme</label>
                    <input type="radio" id="option2" name="Sexe" value="Femme">
                    <label for="option2">Femme</label>
                </div>
                <div class="six my_input">
                    <textarea name="Adresse" id="" cols="20" rows="5"  placeholder="Adresse..."></textarea>
                    <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('Adresse') }}
                        </div>
                </div>
            </fieldset>
    
            <fieldset>
                <legend>Informations médicales</legend>
                <div class="sept">
                    <input type="text" name="Antec" placeholder="Antécédent ">
                    <input type="text" name="Medoc" placeholder="Médicament en cours">
                </div>
                <div class="huit">
                    <input type="tel" name="Resultatt" placeholder="Résultat labo">
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Information administrative</legend>
                <div class="neuf">
                    <div class="neuf_ass">
                        <select name="Medecin">
                            <option>Choisir Médecin</option>
                            @foreach($users as $user)
                            <option value="{{$user->Nom}}">{{$user->Nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('Medecin') }}
                        </div>
                </div>
            </fieldset>

            <div class="bouton">
                <button class="submit">Soumettre</button>
            </div>
        </form>
    </div>
</body>
</html>