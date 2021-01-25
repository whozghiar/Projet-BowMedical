<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-25 06:36:24
  from 'C:\public_html5\dev\templates\patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600e66e867f134_44989827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7432eca2ceb87ce2d23b1a38fd4cc95b04fa6a82' => 
    array (
      0 => 'C:\\public_html5\\dev\\templates\\patient.tpl',
      1 => 1611556582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600e66e867f134_44989827 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
                    <label> Nom : </label> <input type = "text" name = "nom" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['nom']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Doe" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Prenom : </label> <input type = "text" name = "prenom" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['prenom']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="John"  required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['prenom'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Date de naissance : </label> <input type = "date" data-date="" data-date-format="dd/mm/yyyy" name = "dateNais" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dateNais']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Doe"   required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['dateNais'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Âge : </label><input type = "number" min = "0" max = "105"  name = "age" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['age']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="18"  required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['age'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Sexe : </label><select required type = "text" name = "sexe" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sexe']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                                                <option> Homme
                                                <option> Femme
                                                <option selected> Autre
                                            </select>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['sexe'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Mail : </label><input type = "mail" name = "mail" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['mail']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="johndoe@hotmail.com"  required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Téléphone : </label><input type ="number" min = "0" name = "tel" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tel']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="0634472514"  required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Ville : </label><input type = "text" name = "ville" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ville']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Amiens"  required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['ville'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Code Postal : </label><input type = "number" min="0" name = "cp" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['cp']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="80000"  required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['cp'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Adresse : </label><input type = "text" name = "adresse" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['adresse']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="19 rue de l'eau"  required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['adresse'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Jour du rendez-vous : </label> <select required type = "text" name = "jour" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['jour']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jours']->value, 'jour');
$_smarty_tpl->tpl_vars['jour']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jour']->value) {
$_smarty_tpl->tpl_vars['jour']->do_else = false;
?>
                                                                    <option selected> <?php echo $_smarty_tpl->tpl_vars['jour']->value;?>

                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </select>
                    <br>
                    <label> Heure du rendez-vous : (Si vous avez choisi vendredi, choisissez un horaire inférieur à 12h </label>
                                                             <select required name = "horaire">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horaire']->value, 'time');
$_smarty_tpl->tpl_vars['time']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['time']->value) {
$_smarty_tpl->tpl_vars['time']->do_else = false;
?>
                                                                    <option> <?php echo $_smarty_tpl->tpl_vars['time']->value;?>

                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                             </select>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['horaire'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <p> <input type ="submit" value = "Prendre rendez-vous."> </p> 
                </form>
            </div>
        </div>
        <a href="./"> Retour à l'accueil. </a>
                            
                                  
    </body>

</html>
<?php }
}
