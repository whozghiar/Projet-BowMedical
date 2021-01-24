<!doctype html>
<html>
    <head>
            <link href="css/accueil.css" type="text/css" rel="stylesheet" >
            <link href="css/patient.css" type="text/css" rel="stylesheet" >
            <title>{$titre}</title>
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
                    <label> Nom : </label> <input type = "text" name = "nom">
                    <div> {$messages.nom|default:''} </div>
                    <br>
                    <label> Prenom : </label> <input type = "text" name = "prenom">
                    <div> {$messages.prenom|default:''} </div>
                    <br>
                    <label> Date de naissance : </label> <input type = "date" data-date="" data-date-format="dd/mm/yyyy" name = "dateNais" placeholder = "02/08/2001">
                    <div> {$messages.dateNais|default:''} </div>
                    <br>
                    <label> Âge : </label><input type = "number" min = "0" max = "105"  name = "age">
                    <div> {$messages.age|default:''} </div>
                    <br>
                    <label> Sexe : </label><input type = "text" name = "sexe">
                    <div> {$messages.sexe|default:''} </div>
                    <br>
                    <label> Mail : </label><input type = "mail" name = "mail">
                    <div> {$messages.mail|default:''} </div>
                    <br>
                    <label> Téléphone : </label><input type ="number" min = "0" name = "tel">
                    <div> {$messages.tel|default:''} </div>
                    <br>
                    <label> Ville : </label><input type = "text" name = "ville">
                    <div> {$messages.ville|default:''} </div>
                    <br>
                    <label> Code Postal : </label><input type = "number" min="0" name = "cp">
                    <br>
                    <label> Adresse : </label><input type = "text" name = "adresse">
                    <br>
                    <label> Jour du rendez-vous : </label> <select required type = "text" name = "jour">
                                                                {foreach $jours item= jour}
                                                                    <option selected> {$jour}
                                                                {/foreach}
                                                            </select>
                    <br>
                    <label> Heure du rendez-vous : </label> <select required name = "horaire">
                                                                {foreach $horaire item=time}
                                                                    <option selected> {$time}
                                                                {/foreach}
                                                             </select>
                </form>
            </div>
        </div>
                            
                                  
    </body>

</html>
