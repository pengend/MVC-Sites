<?php
	ini_set('include_path', '/Users/xiachalen/Documents/SITES/mvc');
	include_once('modele/connection_sql.php');
	include_once('website_script/sql_user_register.php');
	if (empty($_POST['pseudo']) or empty($_POST['passwd']) or empty($_POST['cpasswd']) or empty($_POST['email']))
	{
		header('Location:../main_controller.php?name=register1');
	}
	elseif (!preg_match("#^[a-z]{1}[a-z0-9]{4,14}$#i", $_POST['pseudo']))
	{
		header('Location:../main_controller.php?name=register2');
	}
	elseif (!preg_match("#^[a-z0-9]{5,20}$#i", $_POST['passwd']))
	{
		header('Location:../main_controller.php?name=register3');
	}
	elseif (!preg_match("#[a-z]#", $_POST['passwd']))
	{
		header('Location:../main_controller.php?name=register4');
	}
	elseif (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
	{
		header('Location:../main_controller.php?name=register5');
	}
	elseif (user_verif($_POST['pseudo']) == 0 or email_verif($_POST['email']) == 0)
	{
		echo 'false';
	}
	else
	{
		add_member($_POST['pseudo'], $_POST['passwd'], $_POST['email']);
		header('Location:../main_controller.php');
	}
?>