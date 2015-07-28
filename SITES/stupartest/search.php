<?php
session_start();
include_once("Web.class.php");
$list = array();
if (!empty($_POST['address']))
	$list['address'] = $_POST['address'];
if (!empty($_POST['price']))
	$list['rent'] = intval($_POST['price']);
if (!empty($_POST['space']))
	$list['space'] = intval($_POST['space']);
if (!empty($_POST['type']))
	$list['type'] = intval($_POST['type']);
/* commande sql */
$docs = new Web_gestion();
$docs->bdd_init();
$result = $docs->sql_search('appart', $list);
if (empty($result)) {
	echo 'No result';
}
foreach ($result as $key => $value) {
	if ($value['type'] == 1)
		$type = 'Location';
	else if ($value['type'] == 2)
		$type = 'Colocation';
	else
		$type = 'Heberg&eacute;';
	echo '<div class="col-lg-5 col-lg-push-1 annonce_figure"><img src="'.$value['imgpath'].'" class="annonce_image"><figcaption>'
	.$value['localname'].' - '.$value['space'].'m<sup>2</sup> - '.$value['rent'].'euros par mois - '.$type.' - Ameublement '.$value['furniture']."<br><br>".$value['address'];
	echo '</figcaption></div>';
}
?>