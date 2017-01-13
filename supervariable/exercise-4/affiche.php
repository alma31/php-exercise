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
	<h1>exercise 4</h1>
	<?php 
	echo "<h1>Bonjour ".$_COOKIE['numero']."ton mot de passe et ".$_COOKIE['motdepasse'];
	 ?>
</body>
</html>