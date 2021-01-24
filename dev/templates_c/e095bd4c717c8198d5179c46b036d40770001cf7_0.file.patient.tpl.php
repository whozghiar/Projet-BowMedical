<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 18:31:16
  from 'C:\Users\Irlando\Documents\DUT Informatique 2020-2021\Documents Personnels\Stages\BOW MEDICAL\Mon Projet\dev\templates\patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600c6b749cb809_25607877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e095bd4c717c8198d5179c46b036d40770001cf7' => 
    array (
      0 => 'C:\\Users\\Irlando\\Documents\\DUT Informatique 2020-2021\\Documents Personnels\\Stages\\BOW MEDICAL\\Mon Projet\\dev\\templates\\patient.tpl',
      1 => 1611424742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600c6b749cb809_25607877 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>
            <link href="css/accueil.css" type="text/css" rel="stylesheet" >
            <link href="css/patient.css" type="text/css" rel="stylesheet" >
            <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
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
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Prenom : </label> <input type = "text" name = "prenom">
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['prenom'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Date de naissance : </label> <input type = "date" data-date="" data-date-format="dd/mm/yyyy" name = "dateNais" placeholder = "02/08/2001">
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['dateNais'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Âge : </label><input type = "number" min = "0" max = "105"  name = "age">
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['age'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Sexe : </label><input type = "text" name = "sexe">
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['sexe'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Mail : </label><input type = "mail" name = "mail">
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Téléphone : </label><input type ="number" min = "0" name = "tel">
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Ville : </label><input type = "text" name = "ville">
                    <div> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['ville'])===null||$tmp==='' ? '' : $tmp);?>
 </div>
                    <br>
                    <label> Code Postal : </label><input type = "number" min="0" name = "cp">
                    <br>
                    <label> Adresse : </label><input type = "text" name = "adresse">
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
                </form>
            </div>
        </div>
                            
                                  
    </body>

</html>
<?php }
}
