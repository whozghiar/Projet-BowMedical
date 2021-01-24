<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 21:23:14
  from 'C:\public_html5\dev\templates\planning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600de5427435e1_14543457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6461bbacf8bdd264947b1425e859931158e52cb' => 
    array (
      0 => 'C:\\public_html5\\dev\\templates\\planning.tpl',
      1 => 1611523369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600de5427435e1_14543457 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <link href="css/planning.css" type="text/css" rel="stylesheet" >
        <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jours']->value, 'jour');
$_smarty_tpl->tpl_vars['jour']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jour']->value) {
$_smarty_tpl->tpl_vars['jour']->do_else = false;
?>
                    <th> <?php echo $_smarty_tpl->tpl_vars['jour']->value;?>
 </th>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
        <tr>
            <td>        08:00</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l80']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m80']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j80']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v80']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        08:15</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l81']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m81']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j81']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v81']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        08:30</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l83']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m83']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j83']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v83']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
        <td>        08:45</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l84']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m84']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j84']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v84']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        09:00</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l90']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m90']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j90']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v90']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        09:15</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l91']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m91']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j91']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v91']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        09:30</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l93']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m93']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j93']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v93']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        09:45</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l94']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m94']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j94']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v94']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>

        </tr>
        <tr>
            <td>        10:00</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l100']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m100']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j100']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v100']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>

        </tr>
        <tr>
            <td>        10:15</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l101']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m101']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j101']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v101']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>

        <tr>
            <td>        10:30</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l103']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m103']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j103']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v103']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        10:45</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l104']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m104']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j104']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v104']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        11:00</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l110']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m110']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j110']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v110']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        11:15</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l111']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m111']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j111']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v111']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        11:30</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l113']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m113']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j113']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v113']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        11:45</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l114']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m114']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j114']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v114']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        14:00</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l140']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m140']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j140']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v140']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        14:15</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l141']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m141']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j141']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v141']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        14:30</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l143']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m143']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j143']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v143']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>

        </tr>
        <tr>
            <td>        14:45</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l144']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m144']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j144']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v144']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        15:00</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l150']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m150']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j150']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v150']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        15:15</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l151']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m151']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j151']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v151']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        15:30</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l153']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m153']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j153']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v153']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        15:45</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l154']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m154']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j154']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v154']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        16:00</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l160']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m160']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j160']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v160']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        16:15</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l161']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m161']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j161']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v161']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        16:30</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l163']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m163']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j163']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v163']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>        16:45</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['l164']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['m164']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['j164']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v164']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>  
        </table>
    </body>
</html><?php }
}
