<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 12:09:48
  from 'C:\public_html5\dev\templates\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600d638c46fd95_26667538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcfab2eda9cce6c45dad5ed11971002ac66e0bea' => 
    array (
      0 => 'C:\\public_html5\\dev\\templates\\accueil.tpl',
      1 => 1611426667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600d638c46fd95_26667538 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>
        <link href="css/accueil.css" type="text/css" rel="stylesheet">
        <meta name= "viewport" content="width=device-width, initial-scale=1">
        <title>Accueil - Projet Bow Medical</title>
    </head>

    <body>
    <div>
        <div>
            <h1> Accueil </h1>
        </div>
    
            <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?> <!-- On regarde si la personne est déjà connectée : -->
                <p> <h2> Bonjour <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 ! </h2> </p>
                <br>
                <p> <h3> Vous pouvez désormais voir le planning des rendez-vous. </h3> </p>

                <a href="planning" class ="btns"> Voir le planning. </a>

                <a href="deconnexion" class="logout">Se déconnecter </a>
            <?php } else { ?> <!-- Sinon si la personne n'est pas connectée il y a deux boutons : connectez-vous et inscrivez-vous -->
            <p>  Vous êtes infirmier ?
                <br><br> <br>
                <a href="connexion" class="btns"> Connectez vous </a> 
                Ou
                <a href="inscription" class ="btns"> Inscrivez-vous !</a>
                <br>
            </p>
                <p> Vous êtes patients ? <p> 
                <br> 
            <p> <a href = "patient" class="btns"> Prenez rendez-vous </a></p>
            <?php }?>
    </div>
</body>
</html> <?php }
}
