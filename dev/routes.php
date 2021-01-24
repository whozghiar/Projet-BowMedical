<?php
require('../includes/pdo.php');
require('fonctions.php');


Flight::route('GET /ok', function(){
    $data=array(
      "titre" => "Inscription infirmier"
    );
    Flight::render('ok.tpl',$data);
  });

  Flight::route('GET /okpatient', function(){
    $data=array(
      "titre" => "Rendez-vous Patient"
    );
    Flight::render('okpatient.tpl',$data);
  });


  Flight::route('GET /planning', function(){
    if (isset($_SESSION['userType']))
    {
        $tab=array();
        $l80="";$l81="";$l83="";$l84="";
        $l90="";$l91="";$l93="";$l94="";
        $l100="";$l101="";$l103="";$l104="";
        $l110="";$l111="";$l113="";$l114="";
        $l140="";$l141="";$l143="";$l144="";
        $l150="";$l151="";$l153="";$l154="";
        $l160="";$l161="";$l163="";$l164 = "";

        $m80="";$m81="";$m83="";$m84="";
        $m90="";$m91="";$m93="";$m94="";
        $m100="";$m101="";$m103="";$m104="";
        $m110="";$m111="";$m113="";$m114="";
        $m140="";$m141="";$m143="";$m144="";
        $m150="";$m151="";$m153="";$m154="";
        $m160="";$m161="";$m163="";$m164 = "";

        $j80="";$j81="";$j83="";$j84="";
        $j90="";$j91="";$j93="";$j94="";
        $j100="";$j101="";$j103="";$j104="";
        $j110="";$j111="";$j113="";$j114="";
        $j140="";$j141="";$j143="";$j144="";
        $j150="";$j151="";$j153="";$j154="";
        $j160="";$j161="";$j163="";$j164 = "";

        $v80="";$v81="";$v83="";$v84="";
        $v90="";$v91="";$v93="";$v94="";
        $v100="";$v101="";$v103="";$v104="";
        $v110="";$v111="";$v113="";$v114="";
        $v140="";$v141="";$v143="";$v144="";
        $v150="";$v151="";$v153="";$v154="";
        $v160="";$v161="";$v163="";$v164 = "";
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
            $req = $db -> prepare("SELECT * FROM patients WHERE jour=:jours");
            $req -> bindParam(':jours',$jour);
            $req-> execute();
            $res = $req -> fetchAll();
            foreach($res as $i){
                $h=$i[12];
                $j = $i[11];
                if ($j =="Vendredi")
                {
                    if($h==$horaire[0])
                    {
                        $v80 = $i[1];
                    }
                    if($h==$horaire[1])
                    {
                        $v81 = $i[1];
                    }
                    if($h==$horaire[2])
                    {
                        $v83 = $i[1];
                    }
                    if($h==$horaire[3])
                    {
                        $v84 = $i[1];
                    }
                    if($h==$horaire[4])
                    {
                        $v90 = $i[1];
                    }
                    if($h==$horaire[5])
                    {
                        $v91 = $i[1];
                    }
                    if($h==$horaire[6])
                    {
                        $v93 = $i[1];
                    }
                    if($h==$horaire[7])
                    {
                        $v94 = $i[1];
                    }
                    if($h==$horaire[8])
                    {
                        $v100 = $i[1];
                    }
                    if($h==$horaire[9])
                    {
                        $v101 = $i[1];
                    }
                    if($h==$horaire[10])
                    {
                        $v103 = $i[1];
                    }
                    if($h==$horaire[11])
                    {
                        $v104 = $i[1];
                    }
                    if($h==$horaire[12])
                    {
                        $v110 = $i[1];
                    }
                    if($h==$horaire[13])
                    {
                        $v111 = $i[1];
                    }
                    if($h==$horaire[14])
                    {
                        $v113 = $i[1];
                    }
                    if($h==$horaire[15])
                    {
                        $v114 = $i[1];
                    }
                    if($h==$horaire[16])
                    {
                        $v140 = $i[1];
                    }
                    if($h==$horaire[17])
                    {
                        $v141 = $i[1];
                    }
                    if($h==$horaire[18])
                    {
                        $v143 = $i[1];
                    }
                    if($h==$horaire[19])
                    {
                        $v144 = $i[1];
                    }
                    if($h==$horaire[20])
                    {
                        $v150 = $i[1];
                    }
                    if($h==$horaire[21])
                    {
                        $v151 = $i[1];
                    }
                    if($h==$horaire[22])
                    {
                        $v153 = $i[1];
                    }
                    if($h==$horaire[23])
                    {
                        $v154 = $i[1];
                    }
                    if($h==$horaire[24])
                    {
                        $v160 = $i[1];
                    }
                    if($h==$horaire[25])
                    {
                        $v161 = $i[1];
                    }
                    if($h==$horaire[26])
                    {
                        $v163 = $i[1];
                    }
                    if($h==$horaire[27])
                    {
                        $v164 = $i[1];
                    }
                }
                if ($j =="Jeudi")
                {
                    if($h==$horaire[0])
                    {
                        $j80 = $i[1];
                    }
                    if($h==$horaire[1])
                    {
                        $j81 = $i[1];
                    }
                    if($h==$horaire[2])
                    {
                        $j83 = $i[1];
                    }
                    if($h==$horaire[3])
                    {
                        $j84 = $i[1];
                    }
                    if($h==$horaire[4])
                    {
                        $j90 = $i[1];
                    }
                    if($h==$horaire[5])
                    {
                        $j91 = $i[1];
                    }
                    if($h==$horaire[6])
                    {
                        $j93 = $i[1];
                    }
                    if($h==$horaire[7])
                    {
                        $j94 = $i[1];
                    }
                    if($h==$horaire[8])
                    {
                        $j100 = $i[1];
                    }
                    if($h==$horaire[9])
                    {
                        $j101 = $i[1];
                    }
                    if($h==$horaire[10])
                    {
                        $j103 = $i[1];
                    }
                    if($h==$horaire[11])
                    {
                        $j104 = $i[1];
                    }
                    if($h==$horaire[12])
                    {
                        $j110 = $i[1];
                    }
                    if($h==$horaire[13])
                    {
                        $j111 = $i[1];
                    }
                    if($h==$horaire[14])
                    {
                        $j113 = $i[1];
                    }
                    if($h==$horaire[15])
                    {
                        $j114 = $i[1];
                    }
                    if($h==$horaire[16])
                    {
                        $j140 = $i[1];
                    }
                    if($h==$horaire[17])
                    {
                        $j141 = $i[1];
                    }
                    if($h==$horaire[18])
                    {
                        $j143 = $i[1];
                    }
                    if($h==$horaire[19])
                    {
                        $j144 = $i[1];
                    }
                    if($h==$horaire[20])
                    {
                        $j150 = $i[1];
                    }
                    if($h==$horaire[21])
                    {
                        $j151 = $i[1];
                    }
                    if($h==$horaire[22])
                    {
                        $j153 = $i[1];
                    }
                    if($h==$horaire[23])
                    {
                        $j154 = $i[1];
                    }
                    if($h==$horaire[24])
                    {
                        $j160 = $i[1];
                    }
                    if($h==$horaire[25])
                    {
                        $j161 = $i[1];
                    }
                    if($h==$horaire[26])
                    {
                        $j163 = $i[1];
                    }
                    if($h==$horaire[27])
                    {
                        $j164 = $i[1];
                    }
                }
                if ($j =="Mardi")
                {
                    if($h==$horaire[0])
                    {
                        $m80 = $i[1];
                    }
                    if($h==$horaire[1])
                    {
                        $m81 = $i[1];
                    }
                    if($h==$horaire[2])
                    {
                        $m83 = $i[1];
                    }
                    if($h==$horaire[3])
                    {
                        $m84 = $i[1];
                    }
                    if($h==$horaire[4])
                    {
                        $m90 = $i[1];
                    }
                    if($h==$horaire[5])
                    {
                        $m91 = $i[1];
                    }
                    if($h==$horaire[6])
                    {
                        $m93 = $i[1];
                    }
                    if($h==$horaire[7])
                    {
                        $m94 = $i[1];
                    }
                    if($h==$horaire[8])
                    {
                        $m100 = $i[1];
                    }
                    if($h==$horaire[9])
                    {
                        $m101 = $i[1];
                    }
                    if($h==$horaire[10])
                    {
                        $m103 = $i[1];
                    }
                    if($h==$horaire[11])
                    {
                        $m104 = $i[1];
                    }
                    if($h==$horaire[12])
                    {
                        $m110 = $i[1];
                    }
                    if($h==$horaire[13])
                    {
                        $m111 = $i[1];
                    }
                    if($h==$horaire[14])
                    {
                        $m113 = $i[1];
                    }
                    if($h==$horaire[15])
                    {
                        $m114 = $i[1];
                    }
                    if($h==$horaire[16])
                    {
                        $m140 = $i[1];
                    }
                    if($h==$horaire[17])
                    {
                        $m141 = $i[1];
                    }
                    if($h==$horaire[18])
                    {
                        $m143 = $i[1];
                    }
                    if($h==$horaire[19])
                    {
                        $m144 = $i[1];
                    }
                    if($h==$horaire[20])
                    {
                        $m150 = $i[1];
                    }
                    if($h==$horaire[21])
                    {
                        $m151 = $i[1];
                    }
                    if($h==$horaire[22])
                    {
                        $m153 = $i[1];
                    }
                    if($h==$horaire[23])
                    {
                        $m154 = $i[1];
                    }
                    if($h==$horaire[24])
                    {
                        $m160 = $i[1];
                    }
                    if($h==$horaire[25])
                    {
                        $m161 = $i[1];
                    }
                    if($h==$horaire[26])
                    {
                        $m163 = $i[1];
                    }
                    if($h==$horaire[27])
                    {
                        $m164 = $i[1];
                    }
                }
                if ($j =="Lundi")
                {
                    if($h==$horaire[0])
                    {
                        $l80 = $i[1];
                    }
                    if($h==$horaire[1])
                    {
                        $l81 = $i[1];
                    }
                    if($h==$horaire[2])
                    {
                        $l83 = $i[1];
                    }
                    if($h==$horaire[3])
                    {
                        $l84 = $i[1];
                    }
                    if($h==$horaire[4])
                    {
                        $l90 = $i[1];
                    }
                    if($h==$horaire[5])
                    {
                        $l91 = $i[1];
                    }
                    if($h==$horaire[6])
                    {
                        $l93 = $i[1];
                    }
                    if($h==$horaire[7])
                    {
                        $l94 = $i[1];
                    }
                    if($h==$horaire[8])
                    {
                        $l100 = $i[1];
                    }
                    if($h==$horaire[9])
                    {
                        $l101 = $i[1];
                    }
                    if($h==$horaire[10])
                    {
                        $l103 = $i[1];
                    }
                    if($h==$horaire[11])
                    {
                        $l104 = $i[1];
                    }
                    if($h==$horaire[12])
                    {
                        $l110 = $i[1];
                    }
                    if($h==$horaire[13])
                    {
                        $l111 = $i[1];
                    }
                    if($h==$horaire[14])
                    {
                        $l113 = $i[1];
                    }
                    if($h==$horaire[15])
                    {
                        $l114 = $i[1];
                    }
                    if($h==$horaire[16])
                    {
                        $l140 = $i[1];
                    }
                    if($h==$horaire[17])
                    {
                        $l141 = $i[1];
                    }
                    if($h==$horaire[18])
                    {
                        $l143 = $i[1];
                    }
                    if($h==$horaire[19])
                    {
                        $l144 = $i[1];
                    }
                    if($h==$horaire[20])
                    {
                        $l150 = $i[1];
                    }
                    if($h==$horaire[21])
                    {
                        $l151 = $i[1];
                    }
                    if($h==$horaire[22])
                    {
                        $l153 = $i[1];
                    }
                    if($h==$horaire[23])
                    {
                        $l154 = $i[1];
                    }
                    if($h==$horaire[24])
                    {
                        $l160 = $i[1];
                    }
                    if($h==$horaire[25])
                    {
                        $l161 = $i[1];
                    }
                    if($h==$horaire[26])
                    {
                        $l163 = $i[1];
                    }
                    if($h==$horaire[27])
                    {
                        $l164 = $i[1];
                    }
                }
            }
        }
        $data=array(
            "l80" => $l80,
            "l81" => $l81,
            "l83" => $l83,
            "l84" => $l84,
            "l90" => $l90,
            "l91" => $l91,
            "l93" => $l93,
            "l94" => $l94,
            "l100" => $l100,
            "l101" => $l101,
            "l103" => $l103,
            "l104" => $l104,
            "l110" => $l110,
            "l111" => $l111,
            "l113" => $l113,
            "l114" => $l114,
            "l140" => $l140,
            "l141" => $l141,
            "l143" => $l143,
            "l144" => $l144,
            "l150" => $l150,
            "l151" => $l151,
            "l153" => $l153,
            "l154" => $l154,
            "l160" => $l160,
            "l161" => $l161,
            "l163" => $l163, 
            "l164" => $l164,
            "m80" => $m80,
            "m81" => $m81,
            "m83" => $m83,
            "m84" => $m84,
            "m90" => $m90,
            "m91" => $m91,
            "m93" => $m93,
            "m94" => $m94,
            "m100" => $m100,
            "m101" => $m101,
            "m103" => $m103,
            "m104" => $m104,
            "m110" => $m110,
            "m111" => $m111,
            "m113" => $m113,
            "m114" => $m114,
            "m140" => $m140,
            "m141" => $m141,
            "m143" => $m143,
            "m144" => $m144,
            "m150" => $m150,
            "m151" => $m151,
            "m153" => $m153,
            "m154" => $m154,
            "m160" => $m160,
            "m161" => $m161,
            "m163" => $m163, 
            "m164" => $m164,
            "j80" => $j80,
            "j81" => $j81,
            "j83" => $j83,
            "j84" => $j84,
            "j90" => $j90,
            "j91" => $j91,
            "j93" => $j93,
            "j94" => $j94,
            "j100" => $j100,
            "j101" => $j101,
            "j103" => $j103,
            "j104" => $j104,
            "j110" => $j110,
            "j111" => $j111,
            "j113" => $j113,
            "j114" => $j114,
            "j140" => $j140,
            "j141" => $j141,
            "j143" => $j143,
            "j144" => $j144,
            "j150" => $j150,
            "j151" => $j151,
            "j153" => $j153,
            "j154" => $j154,
            "j160" => $j160,
            "j161" => $j161,
            "j163" => $j163, 
            "j164" => $j164,
            "v81" => $v81,
            "v83" => $v83,
            "v84" => $v84,
            "v90" => $v90,
            "v91" => $v91,
            "v93" => $v93,
            "v94" => $v94,
            "v100" => $v100,
            "v101" => $v101,
            "v103" => $v103,
            "v104" => $v104,
            "v110" => $v110,
            "v111" => $v111,
            "v113" => $v113,
            "v114" => $v114,
            "v140" => $v140,
            "v141" => $v141,
            "v143" => $v143,
            "v144" => $v144,
            "v150" => $v150,
            "v151" => $v151,
            "v153" => $v153,
            "v154" => $v154,
            "v160" => $v160,
            "v161" => $v161,
            "v163" => $v163, 
            "v164" => $v164,
            "titre" => "planning",
            "jours" => $jours,
        );
        Flight::render('planning.tpl',$data);
    }
    else {
        
    }
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
    $horaire = $_POST['horaire'];

    verifPatient($nom,$prenom,$dateNais,$age,$sexe,$mail,$tel,$ville,$cp,$adresse,$jour,$horaire,$messages,$erreur);

    
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
        $req -> bindParam(':horaire',$horaire);
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

Flight::route("/rendezvous", function(){

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