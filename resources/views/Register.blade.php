<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connecter vous</title>
    <link rel="stylesheet" href="css/creation.css">
</head>
<body>
    </div>
    <div class="formulaire">
        <div class="titre"><h1>GESCOURRIER</h1></div>
        <div class="formulaire_container">
            <div class="formulaire_photo">
                <img src="images/Logodgi.png" width="250" height="250" alt="">
            </div>
            <form action="{{ route('Store.Register') }}" method="post">
                <h1>Créer un compte</h1>
                <div class="inputs">
                    <input type="text" name="Prenom" placeholder="Prenom" id="prenom" class="is_valid">
                        <div class="invalid-feedback" style="color:red">
                            {{ trans($errors->first('Prenom')) }}
                        </div>
                    <input type="text" name="Nom" placeholder="Nom" id="nom" class="is_valid">
                        <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('Nom') }}
                        </div>
                    <input type="email" name="email" placeholder="E-mail" id="email" class="is_valid">
                        <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('email') }}
                        </div>
                    <input type="password" name="password" placeholder="Mot de passe" id="mdp" class="is_valid">
                        <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('password') }}
                        </div>
                    <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" id="mdp_confirm" class="is_valid">
                        <div class="invalid-feedback" style="color:red">
                            {{ $errors->first('password_confirmation') }}
                        </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="bouton" align="center">
                    <button type="submit">Soumettre</button>
                </div>
            </form>
        </div>
        
        
    </div>
</body>
</html>