<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/site_main.css">
	<title>Connexion</title>
</head>
<body>
	<div class="suscribe_div" id="centered">
			<form action="website_script/login.php" method="post">
				<label>Pseudo :</label><input type="text" name="pseudo"><br /><br />
				<label>Mot de passe :</label><input type="password" name="passwd"> <br /><br />
				<?php
				echo '<label>Connexion automatique</label><input type="checkbox" name="fastconnect" value="1" ';
				connect_automatique_verif();
				?>
				<br />
				<br />
				<br />
				<div style="margin:auto;text-align:center">
					<a href="main_controller.php?name=register">
						<span style="font-size:15;float:left">Inscription</span>
					</a>
					<input type="submit" value="Se connecter">
				</div>
			</form>
		</div>
</body>
</html>