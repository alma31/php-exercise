<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 2</title>
</head>
<body>
	<?php 	


	if (isset($_GET['age'])) {
		
		echo $_GET['age'];
	}

	else echo "le paramettre age n'existe pas.";


	 ?>
</body>
</html>