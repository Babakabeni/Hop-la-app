<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connecter vouz</title>
    <link rel="stylesheet" href="css/formulaire_con.css">
</head>
<body>
    <div class="formulaire">
        <div class="titre"><h1>GESCOURRIER</h1></div>
        <div class="formulaire_container">
            <div class="formulaire_photo">
                <img src="images/Logodgi.png" width="250" height="250" alt="">
            </div>
            <form action="{{ route('Auth.Login') }}" method="post">
                <h1>Connexion</h1>
                <div class="inputs">
                    <input type="text" name="Nom" placeholder="Nom d'utilisateur">
                    <input type="password" name="password" placeholder="Mot de passe">
                    <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                </div>
                <p class="mdp_forget">Mot de passe oublié ?</p>
                <div class="bouton" align="center">
                    <button type="submit">Se connecter</button>
                </div>
            </form>
            <p class="inscription">Vous n'avez pas de compte ? <a href="{{route('Index.Register')}}">S'inscrire</a></p>
        </div>
    </div>
</body>
</html>