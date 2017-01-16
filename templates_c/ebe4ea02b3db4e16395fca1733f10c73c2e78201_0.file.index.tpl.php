<?php
/* Smarty version 3.1.30, created on 2017-01-15 17:15:28
  from "C:\wamp64\www\TestSmarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587bae3095bc73_12593384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe4ea02b3db4e16395fca1733f10c73c2e78201' => 
    array (
      0 => 'C:\\wamp64\\www\\TestSmarty\\templates\\index.tpl',
      1 => 1484500526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587bae3095bc73_12593384 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
	<?php echo $_smarty_tpl->tpl_vars['liensCSS']->value;?>

</head>
<body>
<h1 id='grosTitre'>Apprendre Smarty avec Patrick Sebastien</h1>
<?php echo $_smarty_tpl->tpl_vars['patSeb']->value;?>



<p>
	<?php echo $_smarty_tpl->tpl_vars['paragraphe']->value;?>

</p>
<table>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableau']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
	</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<?php echo $_smarty_tpl->tpl_vars['paragraphe']->value;?>
</br><?php echo $_smarty_tpl->tpl_vars['patSeb']->value;?>
</br>P.<?php echo $_smarty_tpl->tpl_vars['tableau']->value['Pierre'];?>

<br/>
<?php echo $_smarty_tpl->tpl_vars['requete63']->value;?>

</body>
</html>
<?php }
}
