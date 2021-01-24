<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 18:25:53
  from 'C:\Users\Irlando\Documents\DUT Informatique 2020-2021\Documents Personnels\Stages\BOW MEDICAL\Mon Projet\dev\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600c6a3186efb6_01572920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f7e95017fbb502033e24b6fa0a7ce0c11bfac6' => 
    array (
      0 => 'C:\\Users\\Irlando\\Documents\\DUT Informatique 2020-2021\\Documents Personnels\\Stages\\BOW MEDICAL\\Mon Projet\\dev\\templates\\connexion.tpl',
      1 => 1611426338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600c6a3186efb6_01572920 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        
        <link href="css/connexion.css" type="text/css" rel="stylesheet" >
        <link href="css/accueil.css" type="text/css" rel="stylesheet" >
        <meta name= "viewport" content="width=device-width, initial-scale=1">

        <title>Connexion</title>
        <!--
        Affiche un formulaire où il suffit d'entrer Email et mot de passe
        Ainsi qu'un bouton "Se connecter"
        -->
    </head>
    <header>
        <a class="header" href="/codes">
        <img class="header" src="/images/home.png">
        </a>
    </header>
    <body>
        <div class="fadeIn H1">
            <div class="page-title-holder">
                <h1> Connexion </h1>
            </div>
        </div>

        <br> 
    <div>
        <div>
            <form action="connexion" method="POST">

                <input type="email" name="mail" placeholder="Email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? '' : $tmp);?>
"  required> <br> <div class="erreur"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
</div>
                
                <br>
                
                <input type="password"  name="mdp" placeholder="Mot de passe" required> <br> <div class="erreur"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['mdp'])===null||$tmp==='' ? '' : $tmp);?>
</div>

                <p> <input type ="submit" value = "Se connecter"> </p>
        </div>
    </div>

    </body>
</html><?php }
}
