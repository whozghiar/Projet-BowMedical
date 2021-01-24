<?php
require('../includes/pdo.php');
require('fonctions.php');


Flight::route('GET /ok', function(){
    $data=array(
      "titre" => "Ok"
    );
    Flight::render('ok.tpl',$data);
  });

  Flight::route('GET /planning', function(){
    $data=array(
      "titre" => "planning"
    );
    Flight::render('planning.tpl',$data);
  });
  

/*
    Cette page correspond à la page d'accueil.
*/

Flight::route('GET /',function(){
    $data = array();
    
    Flight::render('accueil.tpl',$data);

});

Flight::route('GET /inscription', function(){
    $data = array();
    Flight::render('inscription.tpl',$data);
});

Flight::route('POST /inscription',function(){
    $erreur = False;
    $messages = array();

    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $verif = $_POST['verif'];
    verifRegister($mail,$mdp,$nom,$verif,$erreur,$messages);

    if ($erreur){
        Flight::view()->assign('messages',$messages);
        Flight::render('inscription.tpl',$_POST);
    }

    else{
        $mdp = password_hash($mdp,PASSWORD_DEFAULT);
        $db = Flight::get('db');
        $req = $db -> prepare ("INSERT INTO infirmier(mail,mdp,nom) VALUES (:mail,:mdp,:nom)");
        $req -> bindParam(':mail',$mail);
        $req -> bindParam(':mdp',$mdp);
        $req -> bindParam(':nom',$nom);
        $req -> execute();
        Flight::redirect('/ok');
    }
    
});

/*
    Cette route permet d'accéder à la page de connexion par la méthode GET
    On y déclare un tableau, dans lequel on retrouve le titre de la page et les messages d'erreurs qui s'afficheront.
    On fait ensuite un rendu du fichier template : "connexion.tpl" ; un formulaire nous demandant de rentrer une adresse mail ainsi qu'un mot de passe.

*/

Flight::route('GET /connexion', function(){
    // SI l'utilisateur est connecté, on le renvoie sur la page d'accueil.
    if(isset ($_SESSION['user']))

    Flight::redirect('/');
    $data=array(
      "titre"=>"Connexion",
      "messages"=>array()
    );
    Flight::render('connexion.tpl',$data);
  });







Flight::route ('POST /connexion', function(){
    $erreur = False;
    $messages = array();
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];

    verifLogs($mail,$mdp,$erreur,$messages);
    if (!$erreur){
        Flight::redirect("/");
    }

    else {
        Flight::view()->assign('messages',$messages);
        Flight::render('connexion.tpl',$_POST);
    }
});


Flight::route('GET /patient', function(){
    $data=array(
        "titre" => "Prendre rendez-vous",
        "messages" => array(),
        "jours" => array(
            "Lundi",
            "Mardi",
            "Mercredi",
            "Jeudi",
            "Vendredi"
        ),
        "horaire" => array(
            "08:00",
            "08:15",
            "08:30",
            "08:45",
            "09:00",
            "09:15",
            "09:30",
            "09:45",
            "10:00",
            "10:15",
            "10:30",
            "10:45",
            "11:00",
            "11:15",
            "11:30",
            "11:45",
            "14:00",
            "14:15",
            "14:30",
            "14:45",
            "15:00",
            "15:15",
            "15:30",
            "15:45",
            "16:00",
            "16:15",
            "16:30",
            "16:45",
            "17:00"
        )
    );
    Flight::render('patient.tpl',$data);
});

Flight::route('POST /patient', function(){
    $erreur = False;
    $messages= array();
    $nom = $_POST['name'];
    $prenom = $_POST['prenom'];
    $dateNais= $_POST['dateNais'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $ville = $_POST['ville'];
    $cp = $_POST['cp'];
    $adresse = $_POST['adresse'];
    $jour = $_POST['jour'];
    $horaire = $_POST['horaire'];

    if (!$erreur){
        Flight::redirect("/");
    }

    else {
        Flight::view()->assign('messages',$messages);
        Flight::render('patient.tpl',$_POST);
    }

});

/*
    Cette route permet de se déconnecter.
    Elle redirige vers l'index.
*/

Flight::route("/deconnexion", function(){
    $_SESSION = array(); // Réinitialisation de la variable de session
    session_destroy(); // Déstruction de la session
    session_start(); // Nouvelle session
    $_SESSION['logged'] = false;
    Flight::redirect("/"); // Redirection vers l'accueil
});