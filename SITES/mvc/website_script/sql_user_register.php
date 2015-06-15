<?php
function user_verif($username)
{
	global $bdd;
	$rep = $bdd->prepare('SELECT username FROM users WHERE username=:usern');
	$rep->execute(array(
		'usern' => $username
		));
	$donnee = $rep->fetch();
	if ($donnee)
	{
		$rep->closeCursor();
		return 0;
	}
	else
	{
		$rep->closeCursor();
		return 1;
	}
}
function email_verif($email)
{
	global $bdd;
	$rep = $bdd->prepare('SELECT email FROM users WHERE email=:emailn');
	$rep->execute(array(
		'emailn' => $email
		));
	$donnee = $rep->fetch();
	if ($donnee)
	{
		$rep->closeCursor();
		return 0;
	}
	else
	{
		$rep->closeCursor();
		return 1;
	}
}
function add_member($username, $passwd, $email)
{
	global $bdd;
	$pass_hach = sha1($passwd);
	$rep = $bdd->prepare('INSERT INTO member(username, passwd, email) VALUES(:username, :passwd, :email)');
	$rep->execute(array(
		'username' => $username,
		'passwd' => $pass_hach,
		'email' => $email,
		));
}