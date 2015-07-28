<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>La plateforme
		</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="view/bootstrap.css">
	</head>
	<body>
		<header>
			<div class="topbar">
				<div class="centered">
					<a href="?">
						<img id="logo" src="image/42.png">
					</a>
					<div id="search_post">
						<a href="?" style="background:#52C7FF">Rechercher</a>
						<span id="ou"> ou </span>
						<a href="?" style="background:#FF3D47">Publier une annonce</a>
					</div>
					<div class="lg-tools">
						<a href="?"><img src="image/drapeau.png"></a>
						<span id="visible-tools">
						<a href="?"><img src="image/coeur.png"></a>
						<a href="?"><img src="image/mail.png"></a>
						</span>
						<span>
							Pengda
							<img src="image/tri.png">
						</span>
					</div>
				</div>
			</div>
			<div class="menubar">
				<div class="centered">
					<a href="#">Mon profil</a>
					<a href="#">Mon Messagerie</a>
					<a href="#">Mes annonces</a>
					<a href="#">Mes favoris</a>
					<a href="#">Docs utiles</a>
					<a href="#">Espace colocation</a>
					<a href="#">FeedBack</a>
					<a href="#">D&eacute;connextion</a>
				</div>
			</div>
		</header>
		<div id="content" class="col-lg-7">
			<form class="form-horizontal">
  				<div class="row filter">
    				<div class="form-group">
      					<label for="text" class="col-lg-2 control-label">Localisation </label>
      					<div class="col-lg-10 input-group">
      						<span class="input-group-addon">&#x20AC;</span>
        					<input type="text" class="form-control" id="text" name="address">
      					</div>
    				</div>
  				</div>
  				<div class="row filter">
    				<div class="form-group">
      					<label for="textarea" class="col-lg-2 control-label">option </label>
      					<div class="col-lg-10 input-group">
      						<span class="input-group-addon">&#x20AC;</span>
        					<input type="text" class="form-control" id="text" name="price">
      						<span class="input-group-addon" style="border-top-left-radius:4px;border-bottom-left-radius:4px;border-right:0px">m<sub>2</sub></span>
        					<input type="text" class="form-control" id="text" name="space">
      					</div>
    				</div>
  				</div>
  				<div class="row filter">
    				<div class="form-group">
   						<label for="select" class="col-lg-2 control-label">Type d'annonce </label>
   						<div class="col-sm-10 input-group">
      						<div class="col-sm-3 type_box">Logement entier<input type="radio" name="type" value="1">
     						</div>
      						<div class="col-sm-3 type_box">colocation<input type="radio" name="type" value="2"></div>
      						<div class="col-sm-3 type_box">Chambre chez l'habitant<input type="radio" name="type" value="3"></div>
						</div>
		   		 	</div>
		  		</div>
		</form>
		<div class="form-group" style="text-align:center">
			<button class="btn btn-default" style="margin-top:10px;" id="go_search">Envoyer</button>
				<input type="file">

		</div>
		<div class="row">
			<div class="form-group">
				<a id="priceTag" class="type_box col-sm-1 tag" style="border-radius:5px;text-decoration:none" onclick="tag_delete(this)">Prix<img src="image/poubelle.png" style="float:right"></a>
				<a id="typeTag" class="type_box col-sm-2 tag" style="border-radius:5px;text-decoration:none" onclick="tag_delete(this)">Type d'annonce<img src="image/poubelle.png" style="float:right"></a>
				<a id="spaceTag" class="type_box col-sm-2 tag" style="border-radius:5px;text-decoration:none" onclick="tag_delete(this)">Espace<img src="image/poubelle.png" style="float:right"></a>
				<a id="localisationTag" class="type_box col-sm-2 tag" style="border-radius:5px;text-decoration:none" onclick="tag_delete(this)">Localisation<img src="image/poubelle.png" style="float:right"></a>
			</div>
		</div>
		<div id="annonce" class="row">
		</div>
	</div>
	<div id="map">
	</div>
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="https://www.google.fr/jsapi"></script>
	<script type="text/javascript">
    	google.load("maps", "3.4", {
    		other_params: "sensor=false&language=fr"
    	});
	</script>
	<script type="text/javascript" src="bootstrap/js/jquery.googlemap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootscript.js"></script>
	</body>
</html>