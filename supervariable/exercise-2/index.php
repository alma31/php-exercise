 <?php
session_start();
$_SESSION['prenom'] = "lenni";
$_SESSION['nom'] = "lacombe";
$_SESSION['age'] = "23";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 2</title>
</head>
<body>
<h1>super global</h1>
	<ul>
		<li><?php echo $_SERVER['REMOTE_ADDR'] ?></li>
		<li><?php echo $_SERVER['HTTP_USER_AGENT'] ?></li>
		<li><?php echo $_SERVER['SERVER_NAME'] ?></li>
	</ul>

	<a href="user.php">lien</a>
</body>
</html>