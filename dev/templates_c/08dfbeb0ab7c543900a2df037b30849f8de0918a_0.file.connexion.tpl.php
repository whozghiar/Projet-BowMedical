<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-25 09:43:52
  from 'C:\public_html5\dev\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600e92d8f3a6b6_90956978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08dfbeb0ab7c543900a2df037b30849f8de0918a' => 
    array (
      0 => 'C:\\public_html5\\dev\\templates\\connexion.tpl',
      1 => 1611567823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600e92d8f3a6b6_90956978 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        
        <link href="css/connexion.css" type="text/css" rel="stylesheet" >
        <meta name= "viewport" content="width=device-width, initial-scale=1">

        <title>Connexion</title>
        <!--
        Affiche un formulaire où il suffit d'entrer Email et mot de passe
        Ainsi qu'un bouton "Se connecter"
        -->
    </head>
    <body>
        <br> 
        <div>
            <div class ="login">
                <form action="connexion" method="POST">

                    <input id="username" type="text" name="mail" placeholder="Email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? '' : $tmp);?>
"  required> <br> <div class="erreur"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
</div>
                    
                    <br>
                    
                    <input type="password"  name="mdp" placeholder="Mot de passe" required> <br> <div class="erreur"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['mdp'])===null||$tmp==='' ? '' : $tmp);?>
</div>

                    <p> <input type ="submit" value = "Se connecter"> </p>
            </div>
        </div>
        <div class="shadow"></div>
    </body>
</html><?php }
}
