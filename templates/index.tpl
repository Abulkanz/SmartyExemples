<html>
<head>
	<!--Variable de base, chaîne de caractère-->
	<title>{$titre}</title>
	<!--Lien entier vers une feuille de style-->
	{$liensCSS}
</head>
<div id='conteneur'>
<body>
<!--Titre déclaré de manière conventionnelle-->
<h1 id='grosTitre'>Apprendre Smarty avec Jean-Claude Van Damme</h1>

<!--Balise image contenant le portrait de Patrick Sebastien-->
{$jcvd}


<!--Entre balises "paragraphe", est aggrémenté du style lui correspondant-->
<p>
	{$paragraphe}
</p>
<!--Sans balises-->
{$paragraphe}

<h1>{$titre}</h1>

<!--Boucle à l'interieur d'une table, où l'on insère tour à tour la clef et la valeur des éléments déclarés dans la source PHP-->
<table>
{foreach from=$tableau key=k item=i}
	<tr>
		<td>{$k}</td>
		
		<td>{$i}</td>
	</tr>
{/foreach}
<!--Notez la syntae du "foreach"-->
</table>


</br>{$jcvd}</br>
<br/>
<!--Resultat de la requête 63-->
Poids total des friandises = {$requete63} Kg

</body>
</div>
</html>
