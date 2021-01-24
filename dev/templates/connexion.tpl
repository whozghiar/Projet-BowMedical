<html>
    <head>
        
        <link href="css/connexion.css" type="text/css" rel="stylesheet" >
        <link href="css/accueil.css" type="text/css" rel="stylesheet" >
        <meta name= "viewport" content="width=device-width, initial-scale=1">

        <title>Connexion</title>
        <!--
        Affiche un formulaire où il suffit d'entrer Email et mot de passe
        Ainsi qu'un bouton "Se connecter"
        -->
    </head>
    <header>
        <a class="header" href="/codes">
        <img class="header" src="/images/home.png">
        </a>
    </header>
    <body>
        <div class="fadeIn H1">
            <div class="page-title-holder">
                <h1> Connexion </h1>
            </div>
        </div>

        <br> 
    <div>
        <div>
            <form action="connexion" method="POST">

                <input type="email" name="mail" placeholder="Email" value="{$email|default:''}"  required> <br> <div class="erreur">{$messages.mail|default:''}</div>
                
                <br>
                
                <input type="password"  name="mdp" placeholder="Mot de passe" required> <br> <div class="erreur">{$messages.mdp|default:''}</div>

                <p> <input type ="submit" value = "Se connecter"> </p>
        </div>
    </div>

    </body>
</html>