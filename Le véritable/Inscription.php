<?php
session_start();
$bdd = new PDO ('mysql:host=localhost;dbname=espaces_membres;charset=utf8;', 'root', '');
if(isset($_POST['envoi'])){
	if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$mdp = sha1($_POST['mdp']);
		$insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
		$insertUser->execute(array($pseudo, $mdp));

		$recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
		$recupUser->execute(array($pseudo, $mdp));
		if($recupUser->rowCount() > 0){
			$_SESSION['pseudo'] = $pseudo;
			$_SESSION['mdp'] = $mdp;
			$_SESSION['id'] = $recupUser->fetch()['id'];
		}

		 
	}else{
		echo "<p>Veullez compléter tous les champs...</p>";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Présentation de la STI2D</title>
		<!-- icon du site -->
		<link rel="icon" href="images/icon-sti2d_noir.png">

		<!-- lien css -->
		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- lien font awesome  -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	</head>
	
	<body>

		<section class="connexion">

			<h3>Page d'inscription</h3>

			<form method="POST" action="" align="center">

				<h4>Inscrivez-vous</h4>
				<label>Identifient</label>
				<input type="text" name="pseudo" autocomplete="off">
				
				<label>Mot de passe</label>
				<input type="password" name="mdp" autocomplete="off">
				
				<input type="submit" name="envoi" class="btn-connec">

			</form>

		</section>


	</body>
</html>