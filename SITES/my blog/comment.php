<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=myblog;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
$rep = $bdd->prepare('INSERT INTO commentary(pseudo, new_id, contenu, date) VALUES(:pseudo, :new_id, :contenu, NOW())');
$rep->execute(array(
	'pseudo' => $_POST['pseudo'],
	'new_id' => $_POST['new_id'],
	'contenu' => $_POST['contenu']
	));
header('Location:commentaire.php?newsid=' .$_POST['new_id']);
?>