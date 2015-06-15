<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/site_main.css">
	<title>Register</title>
</head>
<body>
	<div class="register_div" id="centered">
		<form action="website_script/verif_register.php" method="post">
<!--			<div style="margin:auto;text-align:left;color:red;font-size:13"><i>Invalid input</i><br /><br />
			</div> -->
			<label title="5-15 character, it must begin by letter or number">Pseudo </label><input type="text" name="pseudo"><br /><br />
			<label title="6-20 character, it must have at least one letter">Mot de passe </label><input type="password" name="passwd"> <br /><br />
			<label>Confirmer </label><input type="password" name="cpasswd"> <br /><br />
			<label>Adresse Mail </label><input type="text" name="email"> <br /><br />
			<br />
			<div style="margin:auto;text-align:center">
				<a href="main_controller.php">
					<span style="font-size:15;float:left">Connexion</span>
				</a>
				<input type="submit" value="S'inscrire">
			</div>	
		</form>
	</div>
</body>
</html>