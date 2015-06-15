<?php
function connect_timeout_set_verif()
{
	if (isset($_SESSION['user']))
	{
		if (!isset($_SESSION['last_connect']))
			$_SESSION['last_connect'] = time();
		else if (time() - $_SESSION['last_connect'] > 10)
		{
			$_SESSION = array();
			session_unset();
			session_destroy();
		}
	}
}
function connect_automatique_verif()
{
	if ($_COOKIE['connection'] == 'enable')
	{
		echo 'checked="checked">';
	}
	else
	{
		echo '>';
	}
	echo 'verif';
}
