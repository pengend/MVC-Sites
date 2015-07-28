<?php
session_start();
/* ini_set sert a avoir le repertoire racine commun */
ini_set('include_path', $pwd);
require_once('model/get_page.php');
/* Web.class.php stock un certain nombres de propriétes pour la gestion */
require_once('Web.class.php');
$pwd = getcwd();
$docs = new Web_gestion();
/* Initialisation de repertoire où se trouve toutes les pages */
$docs->set_pages('view');
$allowed_pages = $docs->get_pages();

/*	$ref_pages = $docs->get_pages();
	$allowed_pages = $docs->get_hash_pages()
if (empty($_GET)) {
	include_once('view/bootstrap.php');
}
foreach ($_GET as $key => $elem) {
	if (in_array($key, $allowed_pages)) {
		include_once('view/'.array_search($key, $allowed_pages).'.php');
		break ;
	}
}
/*Une fonction qui permet d'obtenir un array de hashage qui correspond aux noms des pages 
Dans ce cas, $_GET doit contenir les codes de hashage pour pouvoir acceder aux pages demandées
*/

/* Si GET vide alors renvoit sur la page principal Sinon en fonction de key*/
if (empty($_GET)) {
	include_once('view/bootstrap.php');
}
foreach ($_GET as $key => $elem) {
	if (in_array($key, $allowed_pages)) {
		include_once('view/'.$key.'.php');
		break ;
	}
}
