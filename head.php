<?php
require_once('smarty-3.1.30/libs/Smarty.class.php');

//Génère une nouvelle instance "objet" Smarty
$smarty = new Smarty();
//Repertoire des vues
$smarty->template_dir = 'templates';
//Repertoire des compilations
$smarty->compile_dir = 'templates_c';
?>

