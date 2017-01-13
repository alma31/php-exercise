<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 4</title>
</head>
<body> 
	<?php
	$date = date_create();
	echo date_timestamp_get($date);
	$datearriere = new DateTime("2016-06-16");

	echo date_timestamp_get($datearriere);
	?>

</body>
</html>