<html>
<head>
	<style>
	div.container{
		width: 700px;
		margin: auto;
	}
	div.title {
		width: 500px;
		background-color: black;
		text-align: center;
		color: white;
		margin: auto;
	}
	div.corp {
		width: 500px;
		text-align: left;
		background: radial-gradient(white, black);
		color: black;
		margin: auto;
		line-height: 20px;
	}
	body {
		background: radial-gradient(white, black);
	}
	</style>
	<title>My test blog</title>
</head>
<body>
	<h1 align="center">
		My First Blog
	</h1>
<div class="container">
	Last news : <br>
	<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=myblog;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
	$rep = $bdd->query('SELECT title, new_id, contenu, DATE_FORMAT(date, \'%d/%m/%Y\') AS days, DATE_FORMAT(date, \'%Hh%imin\') AS hour FROM news ORDER BY id DESC');
	while ($donnee = $rep->fetch())
	{
		echo '<div class="title">' .$donnee['title']. ' Le ' .$donnee['days']. ' &agrave; ' .$donnee['hour']. '</div><div class="corp">' .$donnee['contenu']. '<a href="commentaire.php?newsid=' . $donnee['new_id']. '"><br>Commentaire</a></div><br>';
	}
	$rep->closeCursor();
	?>
</div>
</body>
</html>