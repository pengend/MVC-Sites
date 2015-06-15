<?php
$login = $_POST['login'];
$pwd = $_POST['pwd'];

if ($login == 'pxia')
{
	if ($pwd == 8656)
		echo 'Login successful';
}
else
{
	echo 'wrong login/password';
}
	echo $_SERVER['REMOTE_ADDR']
?>
<p>
	<a href="accueil.php">
		retry
	</a>
</p>