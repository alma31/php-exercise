<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 9</title>
</head>
<body>

	<?php

	$hdf = [

	"02" => "Aisne",
	"59" => "Nord",
	"60" => "Oise",
	"62" => "Pas-de-Calais",
	"80" => "Somme",
	];
	
	foreach ($hdf as $key => $value) {
		
		echo "Le département $value a le numéro $key <br />";
	}

	?>
	
</body>
</html>