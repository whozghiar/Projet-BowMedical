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
            <tr>
                <th></th>
                {foreach $jours item= jour}
                    <th> {$jour} </th>
                {/foreach}
            </tr>
        <tr>
            <td>        08:00</td>
            <td>{$l80|default:''}</td>
            <td>{$m80|default:''}</td>
            <td>{$j80|default:''}</td>
            <td>{$v80|default:''}</td>
        </tr>
        <tr>
            <td>        08:15</td>
            <td>{$l81|default:''}</td>
            <td>{$m81|default:''}</td>
            <td>{$j81|default:''}</td>
            <td>{$v81|default:''}</td>
        </tr>
        <tr>
            <td>        08:30</td>
            <td>{$l83|default:''}</td>
            <td>{$m83|default:''}</td>
            <td>{$j83|default:''}</td>
            <td>{$v83|default:''}</td>
        </tr>
        <tr>
        <td>        08:45</td>
            <td>{$l84|default:''}</td>
            <td>{$m84|default:''}</td>
            <td>{$j84|default:''}</td>
            <td>{$v84|default:''}</td>
        </tr>
        <tr>
            <td>        09:00</td>
            <td>{$l90|default:''}</td>
            <td>{$m90|default:''}</td>
            <td>{$j90|default:''}</td>
            <td>{$v90|default:''}</td>
        </tr>
        <tr>
            <td>        09:15</td>
            <td>{$l91|default:''}</td>
            <td>{$m91|default:''}</td>
            <td>{$j91|default:''}</td>
            <td>{$v91|default:''}</td>
        </tr>
        <tr>
            <td>        09:30</td>
            <td>{$l93|default:''}</td>
            <td>{$m93|default:''}</td>
            <td>{$j93|default:''}</td>
            <td>{$v93|default:''}</td>
        </tr>
        <tr>
            <td>        09:45</td>
            <td>{$l94|default:''}</td>
            <td>{$m94|default:''}</td>
            <td>{$j94|default:''}</td>
            <td>{$v94|default:''}</td>

        </tr>
        <tr>
            <td>        10:00</td>
            <td>{$l100|default:''}</td>
            <td>{$m100|default:''}</td>
            <td>{$j100|default:''}</td>
            <td>{$v100|default:''}</td>

        </tr>
        <tr>
            <td>        10:15</td>
            <td>{$l101|default:''}</td>
            <td>{$m101|default:''}</td>
            <td>{$j101|default:''}</td>
            <td>{$v101|default:''}</td>
        </tr>

        <tr>
            <td>        10:30</td>
            <td>{$l103|default:''}</td>
            <td>{$m103|default:''}</td>
            <td>{$j103|default:''}</td>
            <td>{$v103|default:''}</td>
        </tr>
        <tr>
            <td>        10:45</td>
            <td>{$l104|default:''}</td>
            <td>{$m104|default:''}</td>
            <td>{$j104|default:''}</td>
            <td>{$v104|default:''}</td>
        </tr>
        <tr>
            <td>        11:00</td>
            <td>{$l110|default:''}</td>
            <td>{$m110|default:''}</td>
            <td>{$j110|default:''}</td>
            <td>{$v110|default:''}</td>
        </tr>
        <tr>
            <td>        11:15</td>
            <td>{$l111|default:''}</td>
            <td>{$m111|default:''}</td>
            <td>{$j111|default:''}</td>
            <td>{$v111|default:''}</td>
        </tr>
        <tr>
            <td>        11:30</td>
            <td>{$l113|default:''}</td>
            <td>{$m113|default:''}</td>
            <td>{$j113|default:''}</td>
            <td>{$v113|default:''}</td>
        </tr>
        <tr>
            <td>        11:45</td>
            <td>{$l114|default:''}</td>
            <td>{$m114|default:''}</td>
            <td>{$j114|default:''}</td>
            <td>{$v114|default:''}</td>
        </tr>
        <tr>
            <td>        14:00</td>
            <td>{$l140|default:''}</td>
            <td>{$m140|default:''}</td>
            <td>{$j140|default:''}</td>
            <td>{$v140|default:''}</td>
        </tr>
        <tr>
            <td>        14:15</td>
            <td>{$l141|default:''}</td>
            <td>{$m141|default:''}</td>
            <td>{$j141|default:''}</td>
            <td>{$v141|default:''}</td>
        </tr>
        <tr>
            <td>        14:30</td>
            <td>{$l143|default:''}</td>
            <td>{$m143|default:''}</td>
            <td>{$j143|default:''}</td>
            <td>{$v143|default:''}</td>

        </tr>
        <tr>
            <td>        14:45</td>
            <td>{$l144|default:''}</td>
            <td>{$m144|default:''}</td>
            <td>{$j144|default:''}</td>
            <td>{$v144|default:''}</td>
        </tr>
        <tr>
            <td>        15:00</td>
            <td>{$l150|default:''}</td>
            <td>{$m150|default:''}</td>
            <td>{$j150|default:''}</td>
            <td>{$v150|default:''}</td>
        </tr>
        <tr>
            <td>        15:15</td>
            <td>{$l151|default:''}</td>
            <td>{$m151|default:''}</td>
            <td>{$j151|default:''}</td>
            <td>{$v151|default:''}</td>
        </tr>
        <tr>
            <td>        15:30</td>
            <td>{$l153|default:''}</td>
            <td>{$m153|default:''}</td>
            <td>{$j153|default:''}</td>
            <td>{$v153|default:''}</td>
        </tr>
        <tr>
            <td>        15:45</td>
            <td>{$l154|default:''}</td>
            <td>{$m154|default:''}</td>
            <td>{$j154|default:''}</td>
            <td>{$v154|default:''}</td>
        </tr>
        <tr>
            <td>        16:00</td>
            <td>{$l160|default:''}</td>
            <td>{$m160|default:''}</td>
            <td>{$j160|default:''}</td>
            <td>{$v160|default:''}</td>
        </tr>
        <tr>
            <td>        16:15</td>
            <td>{$l161|default:''}</td>
            <td>{$m161|default:''}</td>
            <td>{$j161|default:''}</td>
            <td>{$v161|default:''}</td>
        </tr>
        <tr>
            <td>        16:30</td>
            <td>{$l163|default:''}</td>
            <td>{$m163|default:''}</td>
            <td>{$j163|default:''}</td>
            <td>{$v163|default:''}</td>
        </tr>
        <tr>
            <td>        16:45</td>
            <td>{$l164|default:''}</td>
            <td>{$m164|default:''}</td>
            <td>{$j164|default:''}</td>
            <td>{$v164|default:''}</td>
        </tr>  
        </table>
    </body>
</html>