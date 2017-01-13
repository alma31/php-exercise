
<?php 

setcookie("mdp",$_POST['nu'] , time() + 365*24*3600, null, null, false, true);
setcookie("nu",$_POST['mdp'] , time() + 365*24*3600, null, null, false, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 3</title>
</head>
<body>
	<form action="#" method="post">
		<label>Nom utilisateur</label>
		<input type="" name="nu">
		<label>Mot de passe</label>
		<input type="password" name="mdp">
		<input type="submit" name="envoyer">
	</form>
</body>
</html>