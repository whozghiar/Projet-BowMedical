<!DOCTYPE html>
<html>
    <head>
        <link href="css/planning.css" type="text/css" rel="stylesheet" >
        <title>{$titre}</title>
    </head>
    <body>
        <div>
            <h1> Voici votre planning : </h1>
            <a href = "./"> Accéder à la page d'accueil. </a>
        </div>
        <br>
        <table class = "responstable">
                {* On parcourt les jours Lundi,Mardi,Jeudi,Vendredi. *}
                {foreach $jours item= jour}
                     <tr> <th class = "jour"> {$jour} </th> <tr>
                    {* On parcourt les plages horaires *}
                    {foreach $horaire item=time}
                        <tr> <td> {$time} </td> 
                        {* On parcourt les lignes retournées par la requête SQL formulées dans la route /planning. *}
                        {foreach $res item=i}
                            {* On parcourt les éléments de la ligne.*}
                            {foreach $i item=j}
                                {*  Si le jour du rendez-vous, correspond à un jour de la semaine et si l'horaire correspond à une horaire de la plage horaire,
                                    alors on ajoute des cases avec
                                    les champs nécessaires à l'infirmier.
                                *}
                                {if $j[2]==$jour}
                                    {if $j[1]==$time}
                                        <td class ="patient">Prénom : {$j[0]} </td>
                                        <td class ="patient">Nom : {$j[3]} </td>
                                        <td class ="patient">Date de naissance : {$j[4]} </td>
                                        <td class ="patient">Âge : {$j[5]} </td>
                                        <td class ="patient">Sexe : {$j[6]} </td>
                                        <td class ="patient">Tél : {$j[7]} </td>
                                        <td class ="patient">Adresse : {$j[8]} </td>
                                    {/if}
                                
                                {/if}
                                
                                
                            {/foreach}
                            
                        {/foreach}
                            
                        
                        </tr>
                         
                        
                    {/foreach}
                    
                   
                   
                {/foreach}
                
           
        </table>
    </body>
</html>