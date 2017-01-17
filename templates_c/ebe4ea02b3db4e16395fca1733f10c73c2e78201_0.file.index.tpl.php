<?php
/* Smarty version 3.1.30, created on 2017-01-17 22:16:14
  from "C:\wamp64\www\TestSmarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587e97ae5d2e45_98729242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe4ea02b3db4e16395fca1733f10c73c2e78201' => 
    array (
      0 => 'C:\\wamp64\\www\\TestSmarty\\templates\\index.tpl',
      1 => 1484691371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587e97ae5d2e45_98729242 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<!--Variable de base, chaîne de caractère-->
	<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
	<!--Lien entier vers une feuille de style-->
	<?php echo $_smarty_tpl->tpl_vars['liensCSS']->value;?>

</head>
<div id='conteneur'>
<body>
<!--Titre déclaré de manière conventionnelle-->
<h1 id='grosTitre'>Apprendre Smarty avec Jean-Claude Van Damme</h1>

<!--Balise image contenant le portrait de Patrick Sebastien-->
<?php echo $_smarty_tpl->tpl_vars['jcvd']->value;?>



<!--Entre balises "paragraphe", est aggrémenté du style lui correspondant-->
<p>
	<?php echo $_smarty_tpl->tpl_vars['paragraphe']->value;?>

</p>
<!--Sans balises-->
<?php echo $_smarty_tpl->tpl_vars['paragraphe']->value;?>


<h1><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1>

<!--Boucle à l'interieur d'une table, où l'on insère tour à tour la clef et la valeur des éléments déclarés dans la source PHP-->
<table>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableau']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
		
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
	</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<!--Notez la syntae du "foreach"-->
</table>


</br><?php echo $_smarty_tpl->tpl_vars['jcvd']->value;?>
</br>
<br/>
<!--Resultat de la requête 63-->
Poids total des friandises = <?php echo $_smarty_tpl->tpl_vars['requete63']->value;?>
 Kg

</body>
</div>
</html>
<?php }
}
