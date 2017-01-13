<?php 
setcookie("motdepasse","c'est ma nouvelle valeur" , time() + 365*24*3600, null, null, false, true);
setcookie("numero","c'est ma nouvelle valeur aussi" , time() + 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 5</title>
</head>
<body>
	<?php 
	echo $_COOKIE['numero'].$_COOKIE['motdepasse'];
	 ?>
</body>
</html>