<?php
//Liaison vers le "cerveau" (head.php) de Smarty
require('head.php');

//Liaison vers la BDD
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=sucrerie;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//Exemple de gestion d'une requête
	//Recuperation de la requête
$requete = $bdd->query('
	SELECT 
	SUM(CASE
			WHEN descriptif = "G" THEN (quantite*stock)/1000 
		END)
		+
	SUM(CASE
			WHEN descriptif = "P" THEN (quantite*stock*
				(CASE
					WHEN descriptif = "P" THEN poids_piece
					ELSE 1
				END))/1000 										
		END) "Poids"
FROM produit');
	//Extraction de l'info de la requête
$requete63 = $requete->fetch();

//Batterie d'exemples
	//Lien entier css
$lienCss = '<link rel="stylesheet" type="text/css" href="css/styles.css">';
	//Simple chaîne de caractères
$titre = "Exemple de titre";
	//Balise image
$imageTest = '<img src="img/pat.jpg" alt="oups">';
	//Une date formatée
$date = '2017-01-14';
	//Un paragraphe, une balise <em> à l'intérieur
$parag = '<em>Paragraphe inventé stocké dans la variable parag :</em> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vestibulum magna id ante posuere cursus. Nullam mollis, dolor id sollicitudin suscipit, ipsum orci pulvinar lorem, at mattis massa enim sed tortor. Proin nisl urna, vestibulum quis dolor in, pulvinar euismod purus. Nulla in rutrum velit. Proin finibus justo id metus interdum dictum. Donec sit amet diam lacinia, vehicula sapien quis, interdum est. Quisque venenatis purus ut massa elementum, sit amet condimentum arcu maximus. Mauris ut tempus lorem. Praesent eget nulla ut nulla sollicitudin euismod. Nunc faucibus purus a ipsum dictum varius. Curabitur sed venenatis nisl. Phasellus libero leo, congue id posuere ac, porta in mauris. Aenean a nunc gravida, imperdiet lacus sit amet, tristique libero. Nam vel feugiat elit. Suspendisse ligula est, fringilla id pellentesque a, posuere convallis nulla. Maecenas at sapien in odio luctus tristique ac efficitur dui. Cras massa tellus, tristique at ipsum vitae, sollicitudin pellentesque enim. Aenean a tellus nec ipsum elementum placerat. Donec mauris massa, lobortis vitae dui quis, ornare congue nibh. Etiam convallis lobortis diam ut efficitur. Sed vulputate risus at posuere aliquet. Phasellus ultricies eleifend odio eu ultricies. Nam dapibus, odio sit amet volutpat aliquet, justo justo rhoncus urna, vitae ullamcorper ante sapien ac urna. Vestibulum quis maximus ex. Nullam laoreet lorem sapien, quis vehicula ligula aliquam vel. Duis pellentesque sem ligula, in volutpat nunc condimentum in. . ';

//Tableau classique avec alias
$tableau = array(
	'Pierre' => 'Pailloux',
	'Sophie' => 'Lemaire',
	'DanteAliasAnthony' => 'Rossignol',
	'Alex' => 'Violeau',
	'Quentin' => 'Poque'
	);





//!!!!!! IMPORTANT !!!!!!
	//Assignation des objets utilisables par Smarty, dans les .tpl, ainsi : {$nomObjet} 
$smarty->assign('patSeb',$imageTest);
/*
  $smarty                           : Objet Smarty généré au début
  ->assign('nomObjet',$variablePhp) : Fonction d'assignation
*/
$smarty->assign('titre',$titre);
$smarty->assign('date',$date);
$smarty->assign('tableau',$tableau);
$smarty->assign('paragraphe',$parag);
$smarty->assign('liensCSS',$lienCss);
$smarty->assign('requete63',$requete63['Poids']);

// Pour afficher les objets assignés dans un modèle : ->display('nomDuTemplate')
$smarty->display('index.tpl');
?>
