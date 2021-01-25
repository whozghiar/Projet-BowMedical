<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-25 05:34:15
  from 'C:\public_html5\dev\templates\planning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600e58579ea9c1_47459835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6461bbacf8bdd264947b1425e859931158e52cb' => 
    array (
      0 => 'C:\\public_html5\\dev\\templates\\planning.tpl',
      1 => 1611552831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600e58579ea9c1_47459835 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jours']->value, 'jour');
$_smarty_tpl->tpl_vars['jour']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jour']->value) {
$_smarty_tpl->tpl_vars['jour']->do_else = false;
?>
                     <tr> <th class = "jour"> <?php echo $_smarty_tpl->tpl_vars['jour']->value;?>
 </th> <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horaire']->value, 'time');
$_smarty_tpl->tpl_vars['time']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['time']->value) {
$_smarty_tpl->tpl_vars['time']->do_else = false;
?>
                        <tr> <td> <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
 </td> 
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                            
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['i']->value, 'j');
$_smarty_tpl->tpl_vars['j']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->do_else = false;
?>
                                
                                <?php if ($_smarty_tpl->tpl_vars['j']->value[2] == $_smarty_tpl->tpl_vars['jour']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['j']->value[1] == $_smarty_tpl->tpl_vars['time']->value) {?>
                                        <td class ="patient"> <?php echo $_smarty_tpl->tpl_vars['j']->value[0];?>
 </td>
                                        <td> <?php echo $_smarty_tpl->tpl_vars['j']->value[3];?>
 </td>
                                        <td> <?php echo $_smarty_tpl->tpl_vars['j']->value[4];?>
 </td>
                                        <td> <?php echo $_smarty_tpl->tpl_vars['j']->value[5];?>
 </td>
                                        <td> <?php echo $_smarty_tpl->tpl_vars['j']->value[6];?>
 </td>
                                        <td> <?php echo $_smarty_tpl->tpl_vars['j']->value[7];?>
 </td>
                                        <td> <?php echo $_smarty_tpl->tpl_vars['j']->value[8];?>
 </td>
                                    <?php }?>
                                
                                <?php }?>
                                
                                
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            
                        
                        </tr>
                         
                        
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                   
                   
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
           
        </table>
    </body>
</html><?php }
}
