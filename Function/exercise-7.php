<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 7</title>
</head>
<body>
	<?php 

		function test($age,$genre){

			if ($age > 18 && $genre === "Homme"){

				echo "Vous êtes un homme et vous êtes majeur";
			}

			elseif ($age < 18 && $genre === "Homme") {
				
				echo "Vous êtes un homme et vous êtes mineur";
			}

			elseif ($age > 18 && $genre === "Femme") {
				
				echo "Vous êtes une femme et vous êtes majeur";
			}

			elseif ($age < 18 && $genre === "Femme") {
				
				echo "Vous êtes une femme et vous êtes mineur";
			}

		}

		test(30,"Femme");

	 ?>
</body>
</html>