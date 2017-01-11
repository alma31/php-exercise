<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 6</title>
</head>
<body>  
	<?php 
	if (empty($_POST)) {
		?>
		<form action="index.php" method="post">
			<select name="choix">
				<option>Mr</option>
				<option>Mme</option>
			</select>
			<input type="text" name="nom">
			<input type="text" name="prenom">
			<input type="submit" name="validé">
		</form>
		<?php 
	}else{
		if (isset($_POST["choix"]) && isset($_POST["prenom"]) && isset($_POST["nom"])) {
			echo "Bienvenue " . $_POST["choix"] ." ". $_POST["prenom"] ." ". $_POST["nom"] . "!";
		}else{
			echo "Veuiller remplir tous les champs, merci.";
		}
	}
	?>


</body>
</html>