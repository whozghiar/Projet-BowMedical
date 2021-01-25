<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-25 05:48:05
  from 'C:\public_html5\dev\templates\patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600e5b9500db69_93086116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7432eca2ceb87ce2d23b1a38fd4cc95b04fa6a82' => 
    array (
      0 => 'C:\\public_html5\\dev\\templates\\patient.tpl',
      1 => 1611553679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600e5b9500db69_93086116 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <label> Nom : </label> <input type = "text" name = "nom" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Prenom : </label> <input type = "text" name = "prenom" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['prenom'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Date de naissance : </label> <input type = "date" data-date="" data-date-format="dd/mm/yyyy" name = "dateNais" placeholder = "02/08/2001" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['dateNais'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Âge : </label><input type = "number" min = "0" max = "105"  name = "age" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['age'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Sexe : </label><select required type = "text" name = "sexe">
                                                <option> Homme
                                                <option> Femme
                                                <option selected> Autre
                                            </select>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['sexe'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Mail : </label><input type = "mail" name = "mail" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Téléphone : </label><input type ="number" min = "0" name = "tel" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Ville : </label><input type = "text" name = "ville" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['ville'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Code Postal : </label><input type = "number" min="0" name = "cp" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['cp'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Adresse : </label><input type = "text" name = "adresse" required>
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['adresse'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Jour du rendez-vous : </label> <select required type = "text" name = "jour">
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
                    <label> Heure du rendez-vous : </label> <select required name = "horaire">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horaire']->value, 'time');
$_smarty_tpl->tpl_vars['time']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['time']->value) {
$_smarty_tpl->tpl_vars['time']->do_else = false;
?>
                                                                    <option selected> <?php echo $_smarty_tpl->tpl_vars['time']->value;?>

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
      
                            
                                  
    </body>

</html>
<?php }
}
