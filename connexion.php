<?php
	require_once('./includes/header.php');

?>

<form action="#" method="GET">
	<div>
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom" />
		<span class="erreur">
		<?php
			if (empty($_GET["nom"])) {
				echo "veuillez saisir un nom";
			}
		?>
	</div>
	<div>
		<label for="prenom">Prenom :</label>
		<input type="text" name="prenom" id="prenom" />
		<span class="erreur">		
		<?php
			if (empty($_GET["prenom"])) {
				echo "veuillez saisir un prenom";
			}
		?>
	</div>
	<div>
		<button>Me connecter</button>
	</div>

</form>
<?php
	$_SESSION["utilisateur"]["prenom"]= $_GET["prenom"];
	$_SESSION["utilisateur"]["nom"]= $_GET["nom"];
?>

<?php require_once('./includes/footer.php'); ?>