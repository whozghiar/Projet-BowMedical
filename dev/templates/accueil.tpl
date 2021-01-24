<!doctype html>
<html>
    <head>
        <link href="css/accueil.css" type="text/css" rel="stylesheet">
        <meta name= "viewport" content="width=device-width, initial-scale=1">
        <title>Accueil - Projet Bow Medical</title>
    </head>

    <body>
    <div>
        <div>
            <h1> Accueil </h1>
        </div>
    
            {if isset ($user)} <!-- On regarde si la personne est déjà connectée : -->
                <p> <h2> Bonjour {$user} ! </h2> </p>
                <br>
                <p> <h3> Vous pouvez désormais voir le planning des rendez-vous. </h3> </p>

                <a href="planning" class ="btns"> Voir le planning. </a>

                <a href="deconnexion" class="logout">Se déconnecter </a>
            {else} <!-- Sinon si la personne n'est pas connectée il y a deux boutons : connectez-vous et inscrivez-vous -->
            <p>  Vous êtes infirmier ?
                <br><br> <br>
                <a href="connexion" class="btns"> Connectez vous </a> 
                Ou
                <a href="inscription" class ="btns"> Inscrivez-vous !</a>
                <br>
            </p>
                <p> Vous êtes patients ? <p> 
                <br> 
            <p> <a href = "patient" class="btns"> Prenez rendez-vous </a></p>
            {/if}
    </div>
</body>
</html> 