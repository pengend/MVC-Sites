<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=myblog;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
   die('Erreur : '.$e->getMessage());
}
$rep = $bdd->prepare('SELECT title, contenu, DATE_FORMAT(date, \'%d/%m/%Y\') AS days, DATE_FORMAT(date, \'%Hh%imin\') AS hour FROM news WHERE new_id=:newsid');
$rep->execute(array(
	'newsid' => $_GET['newsid']
	));
$donnee = $rep->fetch();
if ($donnee == false)
{
	header('Location:error.php');
}
?>
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
		background-color: lightgrey;
		color: black;
		margin: auto;
		line-height: 20px;
	}
	div.commentary {
		width: 650px;
		background-color: yellow;
		text-align: left;
		color: blue;
		margin: auto;
	}
	textarea {
		resize: none;
	}
	</style>
	<title>My test blog</title>
</head>
<body>
	<h1 align="center">
		My First Blog
	</h1>
<div class="container">
	<a href="blog.php">
		Returner &agrave; la page pr&eacute;c&egrave;dente.
	</a>
	<br>
	<br>
	<?php
	echo '<div class="title">' .$donnee['title']. ' Le ' .$donnee['days']. ' &agrave; ' .$donnee['hour']. '</div><div class="corp">' .$donnee['contenu']. '</div><br>';
	$rep->closeCursor();
	$rep = $bdd->prepare('SELECT * FROM commentary WHERE new_id=:newsid');
	$rep->execute(array(
		'newsid' => $_GET['newsid']
		));
	while ($donne = $rep->fetch())
	{
		echo '<div class="commentary">' .$donne['pseudo']. ' Le ' .$donne['date']. '<br>' .$donne['contenu']. '</div><br>';
		$nb--;
	}
	$rep->closeCursor();
	?>
		<form action="comment.php" method="post">
		<label>pseudo : </label><input type="text" name="pseudo" requireed> <br>
		<label>commentaire : <br></label><textarea placeholder="&eacute;crivez votre commentaire" row="20" cols="30" name="contenu" required>
		</textarea>
		<input type="hidden" name="new_id" value="<?php echo htmlspecialchars($_GET['newsid'])?>">
		<input type="submit" value="envoyer">
	</form>
</div>
</body>
</html>