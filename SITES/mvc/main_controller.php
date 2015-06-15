<?php
session_start();
ini_set('include_path', '/Users/xiachalen/Documents/SITES/mvc');
include_once('modele/connection_sql.php');
include_once('website_script/sql_user_register.php');
include_once('modele/connection.php');
connect_timeout_set_verif();
if ($_GET['name'] == 'accueil' and isset($_SESSION['user']))
{
	include_once('view/accueil.php');
}
else if ($_GET['name'] == 'register')
{
	include('view/register.php'); 
}
else
{
	include_once('controller/guest_connect_controller.php');
}
