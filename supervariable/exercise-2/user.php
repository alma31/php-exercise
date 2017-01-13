<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 2</title>
</head>
<body>
<?php

echo  
"<h1>Bonjour ".$_SESSION['prenom']." ".$_SESSION['nom']." tu a  ".$_SESSION['age']." ans."

?>	
</body>
</html>