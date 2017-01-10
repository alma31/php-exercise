<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 4</title>
</head>
<body>

	<?php  

	function test($a = 20, $b = 11){

		if ($a > $b){
			echo "Le premier nombre est plus grand";
		}

		elseif ($a < $b) {
			echo "Le premier nombre est plus petit";
		}

		elseif ($a == $b) {
			echo "Les deux nombres sont identiques";

		}
	}

	test();

		?>
	</body>
	</html>