<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if (isset($_POST['pseudo']) and isset($_POST['message']))
{
	$rep = $bdd->prepare('INSERT INTO minichat(pseudo, message, date) VALUES(:pseudo, :message, NOW())');
	$rep->execute(array(
	'pseudo' => $_POST['pseudo'],
	'message' => $_POST['message']
	));
#	$bdd->exec('INSERT INTO minichat(pseudo, message, date) VALUES($_POST[\'pseudo\'], $_POST[\'message\'], NOW()');
}
header('Location:minichat.php');
?>