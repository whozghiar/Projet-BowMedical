<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-25 10:13:49
  from 'C:\public_html5\dev\templates\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600e99dda199b9_23191553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b91be9df596313ea4855a91c82b48d774a8afd7' => 
    array (
      0 => 'C:\\public_html5\\dev\\templates\\inscription.tpl',
      1 => 1611569626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600e99dda199b9_23191553 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>
            <link href="css/inscription.css" type="text/css" rel="stylesheet" >
            <meta name= "viewport" content="width=device-width, initial-scale=1">
            <title>Inscription Infirmier</title>
    </head>
    <body>
        <h1> Inscription </h1>


        <div id="login-box">
            <div class = "left">
                <form action="inscription" method = "POST">
                    <label> Nom : </label> <input type = "text" name = "nom" placeholder = "Doe" value = "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['nom']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Mail : </label> <input type = "mail" name = "mail" placeholder = "JohnDoe@hotmail.com" value = "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['mail']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Mot de passe : </label> <input type = "password" name = "mdp" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['mdp'])===null||$tmp==='' ? '' : $tmp);?>
 </div> 
                    <br>
                    <label> Code Vérification du statut d'infirmier : </label> <input type = "number" min = "0" name = "verif">
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['verif'])===null||$tmp==='' ? '' : $tmp);?>
 </div>

                    <p> <input type ="submit" value = "S'inscrire"> </p> 
                </form>
            </div>
        </div>
    </body>
<?php }
}
