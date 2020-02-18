<?php
	session_start();

	var_dump($_SESSION);
	/*$_SESSION["utilisateur"] = [
		"prenom" => $_GET["prenom"],
		"nom" => $_GET["nom"],
		"id" => 1 ,
	];*/

	
?>

<!DOCTYPE html>

<?php
	include('./traitement/changement_couleur.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titre; ?></title>
	<style>
		.erreur {
			color: #FF0000;
		}

		.sombre {
			color: #FFF;
			background-color: rgb(50,50,50);
		}
		a {
			text-decoration: none;
			color: white;
		}
	</style>
</head>

<body class="<?php echo $couleur; ?>">
	<header>
		<nav><?php require_once('./includes/nav.php'); ?>
		</nav>
	</header>