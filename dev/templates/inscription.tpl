<!doctype html>
<html>
    <head>
            <link href="/accueil.css" type="text/css" rel="stylesheet" >
            <link href="css/inscription.css" type="text/css" rel="stylesheet" >
            <meta name= "viewport" content="width=device-width, initial-scale=1">
            <title>Inscription Infirmier</title>
    </head>
    <body>
        <div>
            <div>
                <h1> Inscription </h1>
            </div>
        </div>

        <div>
            <div>
                <form action="inscription" method = "POST">
                    <label> Nom : </label> <input type = "text" name = "nom" placeholder = "Doe" value = "{$nom|default:''}">
                    <div> {$messages.nom|default:''} </div>
                    <br>
                    <label> Mail : </label> <input type = "mail" name = "mail" placeholder = "JohnDoe@hotmail.com" value = "{$mail|default:''}">
                    <div> {$messages.mail|default:''} </div>
                    <br>
                    <label> Mot de passe : </label> <input type = "password" name = "mdp" required>
                    <div> {$messages.mdp|default:''} </div> 
                    <br>
                    <label> Code Vérification du statut d'infirmier : </label> <input type = "number" min = "0" name = "verif">
                    <div> {$messages.verif|default:''} </div>

                    <p> <input type ="submit" value = "S'inscrire"> </p> 
                </form>
    </body>
