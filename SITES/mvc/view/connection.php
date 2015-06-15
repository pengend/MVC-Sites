<?php
function connect_automatique_reset()
{
	if (empty($_POST['fastconnect']))
	{
		setcookie('connection', 'disable', time() + 185*24*3600);
	}
	else
	{
		setcookie('connection', 'enable', time() + 185*24*3600);
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
}
echo 'ok';