<!doctype html>
<html>
    <head>
            <link href="css/accueil.css" type="text/css" rel="stylesheet" >
            <link href="css/patient.css" type="text/css" rel="stylesheet" >
            <title>TEST</title>
    </head>
    <body>
        <div>
            <div>
                <h1> Prenez un rendez-vous patient. </h1>
            </div>
        </div>

        <div>
            <div>
                <form action="patient" method = "POST">
                    <label> Nom : </label> <input type = "text" name = "nom" value ="{$nom|default:''}" placeholder="Doe" required>
                    <div> {$messages.nom|default:''} </div>
                    <br>
                    <label> Prenom : </label> <input type = "text" name = "prenom" value ="{$prenom|default:''}" placeholder="John"  required>
                    <div> {$messages.prenom|default:''} </div>
                    <br>
                    <label> Date de naissance : </label> <input type = "date" data-date="" data-date-format="dd/mm/yyyy" name = "dateNais" value ="{$dateNais|default:''}" placeholder="Doe"   required>
                    <div> {$messages.dateNais|default:''} </div>
                    <br>
                    <label> Âge : </label><input type = "number" min = "0" max = "105"  name = "age" value ="{$age|default:''}" placeholder="18"  required>
                    <div> {$messages.age|default:''} </div>
                    <br>
                    <label> Sexe : </label><select required type = "text" name = "sexe" value ="{$sexe|default:''}">
                                                <option> Homme
                                                <option> Femme
                                                <option selected> Autre
                                            </select>
                    <div> {$messages.sexe|default:''} </div>
                    <br>
                    <label> Mail : </label><input type = "mail" name = "mail" value ="{$mail|default:''}" placeholder="johndoe@hotmail.com"  required>
                    <div> {$messages.mail|default:''} </div>
                    <br>
                    <label> Téléphone : </label><input type ="number" min = "0" name = "tel" value ="{$tel|default:''}" placeholder="0634472514"  required>
                    <div> {$messages.tel|default:''} </div>
                    <br>
                    <label> Ville : </label><input type = "text" name = "ville" value ="{$ville|default:''}" placeholder="Amiens"  required>
                    <div> {$messages.ville|default:''} </div>
                    <br>
                    <label> Code Postal : </label><input type = "number" min="0" name = "cp" value ="{$cp|default:''}" placeholder="80000"  required>
                    <div> {$messages.cp|default:''} </div>
                    <br>
                    <label> Adresse : </label><input type = "text" name = "adresse" value ="{$adresse|default:''}" placeholder="19 rue de l'eau"  required>
                    <div> {$messages.adresse|default:''} </div>
                    <br>
                    <label> Jour du rendez-vous : </label> <select required type = "text" name = "jour" value ="{$jour|default:''}">
                                                                {foreach $jours item= jour}
                                                                    <option selected> {$jour}
                                                                {/foreach}
                                                            </select>
                    <br>
                    <label> Heure du rendez-vous : (Si vous avez choisi vendredi, choisissez un horaire inférieur à 12h </label>
                                                             <select required name = "horaire">
                                                                {foreach $horaire item=time}
                                                                    <option> {$time}
                                                                {/foreach}
                                                             </select>
                    <div> {$messages.horaire|default:''} </div>
                    <p> <input type ="submit" value = "Prendre rendez-vous."> </p> 
                </form>
            </div>
        </div>
        <a href="./"> Retour à l'accueil. </a>
                            
                                  
    </body>

</html>
