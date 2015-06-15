<html>
<head>
	<style type="text/css">
	label {
		float: left;
		width:150;
		display: block;
	}
	div.container {
		text-align: center;
	}
	</style>
</head>
<body>
<div style="width:400px">
	<form action="post.php" method="post">
	<label>Pseudo :</label><input type="text" name="pseudo"><br />
	<label>Messsge :</label><input type="text" name="message"><br />
	<div class="container">
		<input type="submit" value="Envoyer">
	</div>
	</form>
	<p>The last 10 message from bdd</p>
	<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
	$rep = $bdd->query('SELECT UPPER(pseudo) as pseudo_maj, UPPER(message) AS message_maj, DATE_FORMAT(date, \'%Hh%imin%ss\') AS date FROM minichat');
	while ($donne = $rep->fetch())
	{
		echo '<p>' . htmlspecialchars($donne['pseudo_maj']) . ' : ' . htmlspecialchars($donne['date']). '<br>' .htmlspecialchars($donne['message_maj']). '</p>';
	}
	$rep->closeCursor();
	?>
	<textarea rows="4" cols="4" value="test">
	</textarea>
</div>
</body>
</html>