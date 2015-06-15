<html>
<head>
<style>
body {
background-image:url(http://www.clipart-fr.com/data/wallpaper/Serie_005/fond_ecran_wallpaper_serie_00505.jpg);
background-colod:white;
background-size:2000px 1500px
}
#user {
background-color:black;
border: 2px solid;
border-radius: 10px;
width: 500px;
height: 500px;
margin: auto;
margin-top: 200px;
}
#uhead {
margin: auto;
width:490px;
height:100px;
background-color: grey;
border-radius: 20px;
text-align: center;
line-height: 100px;
}
#input-container {
width: 490px;
height: 390px;
text-align: center;
background-color:white;
border-radius: 20px;
margin: auto;
}
#bloc {
    width: 350px;
    height: 100px;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    text-align: left;
    margin: auto;
}
span {
font-size:30;
}
label {
display: block;
width: 150px;
float: left;
font-size: 18;
}
#button {
background-color: grey;
width: 100px;
font-size: 20;
height:50px;
}
}
</style>
<title>my_pwd_page</title	>
</head>
<body>
<div id="user">
	<div id="uhead">
		<span>
		Login
		</span>
	</div>
	<div id="input-container">
		<div id="bloc">
				<form action="cible.php" method="post">
					<label for="login">login : </label><input type="text" name="login" style="font-size:18"><br /><br>
					<label for="pwd">mot de passe : </label><input type="password" name="pwd" style="font-size:18"><br /><br>
					<div style="margin:auto;text-align:center">
						<input id="button" type="submit" value="Sign in">
					</div>
				</form>
		</div>
	</div>
</div>
</body>
</html>
