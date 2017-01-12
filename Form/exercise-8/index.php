<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 8</title>
</head>
<body>  
	<?php 
	$extention = array('pdf');
	$extensionok = strtolower(  substr(  strrchr($_POST['fichier'], '.')  ,1)  );
	if (empty($_POST)) {
		?>
		<form action="index.php" method="post">
			<select name="choix">
				<option>Mr</option>
				<option>Mme</option>
			</select>
			<input type="text" name="nom">
			<input type="text" name="prenom">
			<input type="file" name="fichier">
			<input type="submit" name="validé">
		</form>
		<?php 
		}else{
		if(isset($_POST["choix"]) && isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["fichier"])) {
			echo "Bienvenue " . $_POST["choix"] ." ". $_POST["prenom"] ." ". $_POST["nom"] . "!" . " ".$_POST["fichier"];
		}else{
			echo "Veuiller remplir tous les champs, merci.";
		}
		if ( in_array($extensionok,$extention) ){
			echo "Extension correcte";
		} else { 
			echo "Extention incorrect";
			}
	}
		
	?>


</body>
</html>