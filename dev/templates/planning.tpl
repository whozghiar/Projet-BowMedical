<!DOCTYPE html>
<html>
    <head>
        <link href="css/planning.css" type="text/css" rel="stylesheet" >
        <title>{$titre}</title>
    </head>
    <body>
        <div>
            <h1> Voici votre planning : </h1>
            <a href = "/dev"> Accéder à la page d'accueil. </a>
        </div>
        <br>
        <table>
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
                                        <td class ="patient"> {$j[0]} </td>
                                        <td> {$j[3]} </td>
                                        <td> {$j[4]} </td>
                                        <td> {$j[5]} </td>
                                        <td> {$j[6]} </td>
                                        <td> {$j[7]} </td>
                                        <td> {$j[8]} </td>
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