<?php
	session_start();
	ini_set('include_path', '/Users/xiachalen/Documents/SITES/mvc');
	include_once('modele/connection_sql.php');
	if (empty($_POST['fastconnect']))
	{
		setcookie('connection', 'disable', time() + 185*24*3600, '/mvc');
	}
	else
	{
		setcookie('connection', 'enable', time() + 185*24*3600, '/mvc');
	}
	$passwd_hache = sha1($_POST['passwd']);
	$rep = $bdd->prepare('SELECT * FROM member WHERE username=:username AND passwd=:passwd');
	$rep->execute(array(
		'username' => $_POST['pseudo'],
		'passwd' => $passwd_hache
		));
	if ($donne = $rep->fetch())
	{
		$_SESSION['user'] = $_POST['pseudo'];
	}
	header('Location:../main_controller.php?name=accueil');
?>