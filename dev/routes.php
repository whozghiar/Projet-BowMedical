<?php
require('../includes/pdo.php');
require('fonctions.php');

/*
    Cette route permet de confirmer l'inscription d'un infirmier.
    Elle rend une page issue d'un template ok.tpl avec un tableau $data contenant un titre de page.
*/
Flight::route('GET /ok', function(){
    $data=array(
      "titre" => "Inscription infirmier"
    );
    Flight::render('ok.tpl',$data);
  });

/*
    Cette route permet de confirmer la prise de rendez-vous d'un patient.
    Elle rend une page issue d'un template okpatient.tpl avec un tableau $data contenant un titre de page.

*/
  Flight::route('GET /okpatient', function(){
    $data=array(
      "titre" => "Rendez-vous Patient"
    );
    Flight::render('okpatient.tpl',$data);
  });

/*
  Cette route donne accès au planning de l'infirmier. Les plage horaires disponibles ne contiennent pas d'information
  tandis que les plages horaires indisponibles sont affichées avec une série d'information concernant le patient associé à cet horaire.
  Pour obtenir ces informations, on effectue une requête.
  On parcourt chaque jour de visite et on émet une requête SQL dans laquelle on sélectionne les champs auxquels l'infirmier souhaite avoir accès.
  On enregistre cette requête dans un tableau.
  Ce tableau sera parcouru dans le fichier template grâce à des fonctionnalités smarty.
  
  Cette route sera rendue par FLIGHT en lui associant un tableau de données $data qui contient les horaires, les jours,
  le tableau et le titre de la page
*/
  Flight::route('GET /planning', function(){
    {

        $horaire = array(
            "08:15:00", //0
            "08:00:00", // 1
            "08:30:00", // 2
            "08:45:00", // 3
            "09:00:00", // 4
            "09:15:00", // 5 
            "09:30:00", // 6
            "09:45:00", // 7
            "10:00:00", // 8
            "10:15:00", // 9
            "10:30:00", // 10
            "10:45:00", // 11
            "11:00:00", // 12
            "11:15:00", // 13
            "11:30:00", // 14
            "11:45:00", // 15
            "14:00:00", // 16 140
            "14:15:00", // 17 141
            "14:30:00", // 18 143
            "14:45:00", // 19 144
            "15:00:00", // 20 150
            "15:15:00", // 21 151
            "15:30:00", // 22 153 
            "15:45:00", // 23 154
            "16:00:00", // 24 160
            "16:15:00", // 25 161
            "16:30:00", // 26 163
            "16:45:00" // 27 164
        );
        $jours = array(
            "Lundi",
            "Mardi",
            "Jeudi",
            "Vendredi"
        );
        $db = Flight::get('db');

        foreach($jours as $jour){
            $req = $db -> prepare("SELECT nom,horaire,jour,prenom,dateNais,age,sexe,tel,adresse FROM patients WHERE jour=:jours");
            $req -> bindParam(':jours',$jour);
            $req-> execute();
            $res = $req -> fetchAll();
            $tab[]=$res;
        }
        $data=array(
            "res" => $tab,
            "titre" => "planning",
            "jours" => $jours,
            "horaire" => $horaire
        );
        Flight::render('planning.tpl',$data);
    }
  });
  

/*
    Cette page correspond à la page d'accueil.
*/

Flight::route('GET /',function(){
    $data = array();
    
    Flight::render('accueil.tpl',$data);

});

/*
    Cette route fait le rendu d'une page inscription sur laquelle un infirmier peut s'inscrire en envoyant des données.
*/
Flight::route('GET /inscription', function(){
    $data = array();
    Flight::render('inscription.tpl',$data);
});

/*
    Cette route permet de soumettre les données envoyées par l'utilisateur.
    Elle possède une variable $erreur qui passe à True en cas d'erreur.
    Elle possède un tableau $messages qui contient les éventuels messages d'erreur.
    Les données soumises sont stockées dans des variables attitrées qui seront vérifiées.
    Cette vérification s'effectue grâce à la fonction "verifRegister()". 

    En cas d'erreur, on raffiche le formulaire avec les messages d'erreurs nécessaires.
    Sinon, on insère dans notre base de données les nouvelles informations de l'infirmier (mail,mot de passe chiffré et nom)

    PS : Un code simpliste, est prédéfini "123456" afin d'attester le statut d'infirmier.

*/
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






/*
  Cette route permet de soumettre les données du formulaire de connexion.
  On va déclarer une variable $erreur qui passera à True en cas d'erreur(s).
  Un variable messages sera un tableau affichant les éventuels messages d'erreurs.
  On appelle la fonction "verifLogs()" qui permet d'effectuer une vérification des informations envoyées par l'utilisateur.

  S'il n'y a pas d'erreur, on redirige vers la page d'accueil.
  En cas d'erreur on raffiche le formulaire avec les messages d'erreurs.
*/
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

/*
    Cette route permet d'accéder au formulaire du patient.
    Elle va rendre un fichier tpl en lui associant un tableau de données $data, dans lequel on lui donne :
    - un titre de page
    - un tableau messages qui contiendra les éventuels messages d'erreurs
    - La liste des jours disponibles
    - Les horaires disponibles

*/
Flight::route('GET /patient', function(){
    $data=array(
        "titre" => "Prendre rendez-vous",
        "messages" => array(),
        "jours" => array(
            "Lundi",
            "Mardi",
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
        )
    );
    Flight::render('patient.tpl',$data);
});

/*
    Cette route permet au patient de soumettre son formulaire une fois qu'il clique sur le bouton envoyer.
    Elle possède une variable $erreur qui passera à True si elle rencontre une erreur.
    Les différents champs envoyés par la méthode POST sont stockés dans des variables attitrées.
    On appelle la fonction "verifpatient()" définie dans le fichier fonctions.php.
    Elle consiste simplement à effectuer des vérifications précisées dans la documentation dans le fichier fonctions.php
    
    Si la fonction ne rencontre pas d'erreur.
    Elle insère les données du patient ainsi que le jour et le créneau horaire du rendez-vous, dans la base de données.

    Autrement, elle va rafficher le formulaire avec les messages d'erreur.

    PS : Les horaires pour le vendredi matin sont affichées mais ne peuvent pas être soumises au formulaire.


*/
Flight::route('POST /patient', function(){
    $erreur = False;
    $messages= array();
    $nom = $_POST['nom'];
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
    $horair = $_POST['horaire'];

    verifPatient($nom,$prenom,$dateNais,$age,$sexe,$mail,$tel,$ville,$cp,$adresse,$jour,$horair,$messages,$erreur);

    
    if (!$erreur){
        $db = Flight::get('db');
        $req = $db -> prepare("INSERT INTO patients(nom,prenom,dateNais,age,sexe,mail,tel,ville,cp,adresse,jour,horaire)
                               VALUES (:nom,:prenom,:dateNais,:age,:sexe,:mail,:tel,:ville,:cp,:adresse,:jour,:horaire)");
        $req -> bindParam(':nom',$nom);
        $req -> bindParam(':prenom',$prenom);
        $req -> bindParam(':dateNais',$dateNais);
        $req -> bindParam(':age',$age);
        $req -> bindParam(':sexe',$sexe);
        $req -> bindParam(':mail',$mail);
        $req -> bindParam(':tel',$tel);
        $req -> bindParam(':ville',$ville);
        $req -> bindParam(':cp',$cp);
        $req -> bindParam(':adresse',$adresse);
        $req -> bindParam(':jour',$jour);
        $req -> bindParam(':horaire',$horair);
        $req -> execute();
        Flight::redirect("/okpatient");
    }

    else {
        $jours = array(
            "Lundi",
            "Mardi",
            "Jeudi",
            "Vendredi"
        );
        $horaire = array(
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
            "16:45"
        );
        Flight::view()->assign('horaire',$horaire);
        Flight::view()->assign('jours',$jours);
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