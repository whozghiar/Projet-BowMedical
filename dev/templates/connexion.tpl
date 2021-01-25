<html>
    <head>
        
        <link href="css/connexion.css" type="text/css" rel="stylesheet" >
        <meta name= "viewport" content="width=device-width, initial-scale=1">

        <title>Connexion</title>
        <!--
        Affiche un formulaire où il suffit d'entrer Email et mot de passe
        Ainsi qu'un bouton "Se connecter"
        -->
    </head>
    <body>
        <br> 
        <div>
            <div class ="login">
                <form action="connexion" method="POST">

                    <input id="username" type="text" name="mail" placeholder="Email" value="{$email|default:''}"  required> <br> <div class="erreur">{$messages.mail|default:''}</div>
                    
                    <br>
                    
                    <input type="password"  name="mdp" placeholder="Mot de passe" required> <br> <div class="erreur">{$messages.mdp|default:''}</div>

                    <p> <input type ="submit" value = "Se connecter"> </p>
            </div>
        </div>
        <div class="shadow"></div>
    </body>
</html>