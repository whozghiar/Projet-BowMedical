<?php

require('../includes/pdo.php');


/** Cette fonction permet de vérifier les identifiants de l'utilisateur. 
 * 
 * @param mail Le mail de l'infirmier
 * @param mdp Le mot de passe de son compte
 * @param erreur Un booléen qui passe à True en cas d'erreur.
 * @param messages Un tableau associatif de messages d'erreur. 
 * 
 * Si le champ du mail est vide, la variable erreur passe à True.
 * Si le champ du mot de passe est vide, la variable erreur passe à True.
 * 
 * Sinon, on vérifie la correspondance avec la base de données.
 *  Si aucune ligne n'est retournée par la requête de vérification du mail, la variable erreur passe à True.
 *  Si le mot de passe n'est pas vérifié, la variable erreur passe à True.
 *  
 * En cas d'erreur, on ajoute un message d'erreur personnalisé.
 * @return Void la fonction ne retourne rien.
 */

function verifLogs($mail,$mdp,&$erreur,&$messages){

    if(empty($mail)){
        $erreur = True;
        $messages['mail'] = "Identifiants invalide.";
    }

    if (empty($mdp)){
        $erreur = True;
        $messages['mdp'] = "Identifiants invalide.";
    }

    else {
        $db = Flight::get('db');
        $req = $db -> prepare ("SELECT * FROM infirmier WHERE mail=:mail");
        $req -> bindParam(':mail',$mail);
        $req -> execute();

        if ($req -> rowCount()==0){
            $erreur = True;
            $messages['mail'] = " Les identifiants n'existent pas.";
        }

        else{
            $compte = $req -> fetch();
        }

        if (isset($compte)){
            if (password_verify($mdp,$compte[2])){

                $_SESSION['user'] = $compte[3];
                $_SESSION['mail'] = $compte[1];
                $_SESSION['userType'] = $compte[4];
                $_SESSION['id'] = $compte[0];
      
            }

            else{
                $erreur = True;
                $messages['mdp'] = "Mot de passe incorrect";
            }
        }
    }

}

/** Cette fonction permet de vérifier les données d'enregistrements pour un compte infirmier. 
 * 
 * @param mail Le mail de l'infirmier
 * @param mdp Le mot de passe de son compte
 * @param erreur Un booléen qui passe à True en cas d'erreur.
 * @param messages Un tableau associatif de messages d'erreur. 
 * 
 * Si le champ du mail est vide, la variable erreur passe à True.
 * Si le champ du mot de passe est vide, la variable erreur passe à True.
 * 
 * Sinon, on vérifie la correspondance avec la base de données.
 *  Si aucune ligne n'est retournée par la requête de vérification du mail, la variable erreur passe à True.
 *  Si le mot de passe n'est pas vérifié, la variable erreur passe à True.
 *  
 * En cas d'erreur, on ajoute un message d'erreur personnalisé.
 * @return Void la fonction ne retourne rien.
 */

function verifRegister($mail,$mdp,$nom,$verif,&$erreur,&$messages){
      if (empty($nom)){
        $erreur = True;
        $messages["nom"] = '<br>Vous devez saisir un Nom.';
      }
      if (empty($mail)){
        $erreur = True;
        $messages["mail"] = '<br>Vous devez saisir une Email.';
      }
    
      elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        $erreur = True;
        $messages["mail"]='<br>Vous devez saisir une Email VALIDE.';
      }
    
      if (empty($mdp)){
        $erreur = True;
        $messages["mdp"] = '<br>Vous devez saisir un mot de passe.';
      }
    
      elseif  (strlen($mdp) < 8 ){
        $erreur = True;
        $messages["mdp"] = '<br>Votre mot de passe doit faire 8 caractères minimum.';
      }

      if (empty($verif)){
          $erreur = True;
          $messages["mdp"] = '<br> Votre code de vérification est incorrect.';
      }
      // On utilisera un code simpliste "123456" pour cet exemple qui servira à attester le statut d'infirmier.
      if ($verif != "123456"){
          $erreur = True;
          $messages['verif'] = '<br> Votre code de vérification est incorrect.';
      }
    
      else {
        $db = Flight::get('db');
        // MAIL
        $req = $db -> prepare( "SELECT mail FROM infirmier where mail = :mail");
        $req -> execute (array(':mail' => "$mail"));
    
        if ($req -> rowCount() > 0)
        {
          $erreur = True;
          $messages['mail'] = '<br> Email déjà existante.';
        }
      }
    
    
}


/** Cette fonction permet de vérifier les données d'enregistrements pour un compte infirmier. 
 * 
 * @param nom Le mail de l'infirmier
 * @param prenom Le mot de passe de son compte
 * @param dateNais La date de naissance du patient.
 * @param age L'âge du patient
 * @param sexe Le sexe du patient
 * @param mail Le mail du patient.
 * @param tel Le numéro de téléphone du patient.
 * @param ville La ville du patient.
 * @param cp Le code postal du patient.
 * @param adresse L'adresse postale du patient.
 * @param jour Le jour auquel le patient souhaite prendre rendez-vous.
 * @param horaire L'horaire à laquelle le patient veut prendre rendez-vous.
 * @param erreur Un booléen qui passe à True en cas d'erreur.
 * @param messages Un tableau associatif de messages d'erreur. 
 * 
 * Si le champ du nom est vide, la variable erreur passe à True.
 * Si le champ du prenom est vide, la variable erreur passe à True.
 * Si le champ de la date de naissance est vide, la variable erreur passe à True.
 * Si le champ de l'âge est vide, la variable erreur passe à True.
 * Si le champ du sexe est vide, la variable erreur passe à True.
 * Si le champ du mail est vide, la variable erreur passe à True.
 * Si le champ du nom est vide, la variable erreur passe à True.
 * Si le champ du nom est vide, la variable erreur passe à True.
 * 
 * 
 * 
 * Sinon, on vérifie la correspondance avec la base de données.
 *  Si aucune ligne n'est retournée par la requête de vérification du mail, la variable erreur passe à True.
 *  Si le mot de passe n'est pas vérifié, la variable erreur passe à True.
 *  
 * En cas d'erreur, on ajoute un message d'erreur personnalisé.
 * @return Void la fonction ne retourne rien.
 */


function verifPatient($nom,$prenom,$dateNais,$age,$sexe,$mail,$tel,$ville,$cp,$adresse,$jour,$horaire,&$messages,&$erreur){
    /*
        Cette requête SQL permet de vérifier si une horaire est déjà prise afin d'éviter le surbooking.
    */
    $db = Flight::get('db');
    $req = $db -> prepare("SELECT * FROM patients WHERE horaire=:horaire AND jour=:jour");
    $req -> bindParam(':horaire',$horaire);
    $req -> bindParam(':jour',$jour);
    $req -> execute();
    if ($req -> rowCount()>0){
        $erreur = True;
        $messages['horaire'] = "<br> Cette horaire est déjà prise.";
    }
    /*
        Si le rendez-vous est pris un vendredi, si l'horaire est pris après 14h, une erreur résulte. 
    */
    if ($jour == "Vendredi"){
        if (
               ($horaire =="14:00")
            or ($horaire =="14:15")
            or ($horaire =="14:30")
            or ($horaire =="14:45")
            or ($horaire =="15:00")
            or ($horaire =="15:15")
            or ($horaire =="15:30")
            or ($horaire =="15:45")
            or ($horaire =="16:00")
            or ($horaire =="16:15")
            or ($horaire =="16:30")
            or ($horaire =="16:45")
        )
        {
            $erreur = True;
            $messages['horaire'] = '<br> Le vendredi, les rendez-vous se terminent à 12:00';
        }

    }

    if ((date("Y") - (intval(substr($dateNais,0,4)))) > 105  ){
        $erreur = True;
        $messages['dateNais'] = '<br>Date de naissance invalide.';
    }
    if (empty($nom)){
        $erreur = True;
        $messages['nom'] = '<br>Vous devez saisir un Nom.';
    }

    if (empty($prenom)){
        $erreur = True;
        $messages['prenom'] ='<br>Vous devez saisir un Prénom.';
    }

    if (empty($dateNais)){
        $erreur = True;
        $messages['dateNais'] ='<br>Vous devez saisir une date de naissance.';
    }


    if (empty($age)){
        $erreur = True;
        $messages['age'] = '<br>Vous devez saisir un âge.';
    }

    if ((strlen($age))>3){
        $erreur = True;
        $messages['age'] = '<br> Âge incorrect, veuillez saisir un âge VALIDE.';
    }
    if ((intval($age) < 0) and (intval($age)>105)){
        $erreur = True;
        $messages['age'] = '<br>Âge incorrect, veuillez saisir un âge VALIDE.';
    }

    if (empty($mail)){
        $erreur = True;
        $messages['mail'] = '<br>Vous devez saisir une adresse E-mail.';
    }

    elseif(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        $erreur = True;
        $messages['mail'] = '<br>Mail incorrect, veuillez saisir une adresse E-mail VALIDE.';
    }

    if (empty ($tel)){
        $erreur = True;
        $messages['tel'] = "<br>Veuillez saisir un N° de téléphone";
      }

      if (!is_numeric($tel)){
        $erreur = True;
        $messages['tel'] = "<br> N° incorrect, veuillez saisir un numéro de téléphone VALIDE.";
        $_POST['tel']="";
      }

      if ((strlen(trim($tel))>10) or (strlen(trim($tel))<10) ){
        $erreur = True;
        $messages['tel'] = "<br>N° Incorrect, Veuillez saisir un N° de téléphone VALIDE.";
        $_POST['tel']="";        
      }

      if (empty ($ville)){
        $erreur = True;
        $messages['ville'] = "<br>Veuillez saisir une ville.";
      }

      if (is_numeric($ville)){
        $erreur = True;
        $messages['ville'] = "<br>Ville incorrecte, veuillez saisir une ville VALIDE.";
        $_POST['ville']="";
      }

    if (empty($cp)){
        $erreur = True;
        $message['cp'] = "<br>Veuillez saisir un code postal.";
        $_POST['cp'] = "";
    }

    if (!is_numeric($cp)){
        $erreur = True;
        $messages['cp'] = "<br>Code Postal incorrect, veuillez saisir un code postal valide.";
        $_POST['cp']="";
    }

    if(!preg_match("~^[0-9]{5}$~",$cp)){
        $erreur = True;
        $messages['cp'] = "<br>Code Postal incorrect, veuillez saisir un code postal VALIDE.";
        $_POST['cp']="";
    }

    if (empty($adresse)){
        $erreur = True;
        $messages['adresse'] = "<br>Veuillez saisir une adresse postale.";
        $_POST['adresse']="";
    }

    if (is_numeric($adresse)){
        $erreur = True;
        $messages['adresse'] = "<br>Adresse incorrecte, veuillez saisir une adresse postale VALIDE";
        $_POST['adresse']="";
    }




}
