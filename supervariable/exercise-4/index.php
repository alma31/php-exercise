<?php 
setcookie("motdepasse",$_COOKIE['motdepasse'] , time() + 365*24*3600, null, null, false, true);	
setcookie("numero",$_COOKIE['numero'] , time() + 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 4</title>
</head>
<body>
	<form action="affiche.php" method="post">
		<label>Nom utilisateur</label>
		<input type="" name="numero">
		<label>Mot de passe</label>
		<input type="password" name="motdepasse">
		<input type="submit" name="envoyer">
	</form>
</body>
</html>