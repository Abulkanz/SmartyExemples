<html>
<head>
	<title>{$titre}</title>
	{$liensCSS}
</head>
<body>
<h1 id='grosTitre'>Apprendre Smarty avec Patrick Sebastien</h1>
{$patSeb}


<p>
	{$paragraphe}
</p>
<table>
{foreach from=$tableau key=k item=i}
	<tr>
		<td>{$k}</td>
		<td>{$titre}</td>
		<td>{$i}</td>
	</tr>
{/foreach}
</table>
{$paragraphe}</br>{$patSeb}</br>P.{$tableau['Pierre']}
<br/>
{$requete63}
</body>
</html>
