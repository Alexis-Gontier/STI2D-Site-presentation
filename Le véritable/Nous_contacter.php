<?php 
session_start();
if (isset($_POST['send'])) {

	//extraction des variables
	extract($_POST);

	//verification si les variables existent et ne sont pas vides
	if (isset($username) && $username != "" &&
		isset($email) && $username != "" &&
		isset($message) && $message != ""){
			//envoyé l'email
			//le destinataire (A qui cela va envoyer)
			$to = "alexis.gontier03@gmail.com";
			//objet du mail
			$subject = "Vous avez reçu un message de :" . $email;

			$message = "
				<p><strong>Email :</strong>".$email."</p>
				<p><strong>Nom :</strong> ".$username." </p>
				<p><strong>Message :</strong> ".$message." </p>
			";

			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <'.$email.'>' . "\r\n";


			//envoi de mail
			$send = mail($to,$subject,$message,$headers);
			//verification de l'envoi
			if ($send){
				$_SESSION['succes_message'] = "message envoyé";
				//redirection
				header("location:envoye.html");
				
			}else {
				$info = "message non envoyé";
			}

	}else{
		//si elles sont vides
		$info = "veuillez remplir tous les champs !";
	}
}
?>



<!DOCTYPE html>
<html lang="fr">
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

	<!-- bouton pour aller en haut debut -->

	<div id="scrollUp">
		<a href="#"><i class="fa-solid fa-arrow-up"></i></a>
	</div>

	<!-- bouton pour aller en haut fin -->

	

	<!-- header debut -->

	<header>
		
		<a href="index.html" class="logo img-noir"><img src="images/icon-sti2d_noir.png"></a>
		<a href="index.html" class="logo img-blanc"><img src="images/icon-sti2d_blanc.png"></a>

		<nav class="navbar">
			<ul>
				<li><a href="Spécialités.html">Spécialités</a></li>
				<li><a href="Les_projets.html">Les Projets</a></li>
				<li><a href="La_Salle_St_Nicolas.html">La Salle St Nicolas</a></li>
				<li><a href="Nous_contacter.php">Nous Contacter</a></li>
			</ul>
		</nav>

		<div class="dark-mode">
			<i class="fa-solid fa-moon img-noir"></i><i class="fa-solid fa-sun img-blanc"></i>
		</div>

		<div id="menu-bar" class="fas fa-bars"></div>

	</header>

	<!-- header fin -->

	<section class="connection">

		<div class="container">

			<?php 
				//afficher le message d'erreur
				if(isset($info)){ ?>
					<p class="request_message" style="color: red">
						<?=$info?>
					</p>
				<?php
				}
			?>

			<?php 
				//afficher le message de succes
				if(isset($_SESSION['succes_message'])){ ?>
					<p class="request_message" style="color: green">
						<?=$_SESSION['succes_message']?>
					</p>
				<?php
				}
			?>
				
			<form action="" method="POST">

				<h4>Contactez-nous</h4>

				<label>Nom</label>
				<input type="text" name="username">
				<label>Email</label>
				<input type="email" name="email">
				<label>Message</label>
				<textarea name="message" cols="30" rows="10"></textarea>
				<button name="send">Envoyer</button>

			</form>

		</div>

	</section>

	

	<!-- footer debut -->

	<footer>

		<div class="debut">
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<ul>
				<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-snapchat"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
			</ul>

		</div>

		<div class="fin">
			<p>created by <span>Baptiste Lhote, Eric Da Costa, Alexis Gontier</span> | all rights reserved !</p>
		</div>

	</footer>

	<!-- footer fin -->

	<!-- Imporation de librairies js -->
	<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<!-- lien vers le fichier js -->
	<script src="app.js"></script>

</body>
</html>