<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=site_member_space;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
   die('Erreur : '.$e->getMessage());
}
