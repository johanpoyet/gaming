<!doctype html>
<html lang="fr">
<?php
	include_once('BDD/connectBdd.php'); // on inclut le fichier de connexion à la base de donnée
	include('routes.php'); // on inclut le routeur
?>


<head>
 	<meta charset="utf-8" />
	<meta name="keywords" content="<?php echo $keywords; ?>" /> <!-- affiche keywords -->
	<meta name="description" content="<?php echo $description; ?>" /> <!-- écris description -->
	<meta name="robots" content="index,follow,all" />
	<title><?php echo $title; ?></title> <!-- ecris title -->


	<link rel="shortcut icon" href="template-css/favicon.ico" />
	<link rel="icon" href="template-css/favicon_anime.gif" />
	<link rel="stylesheet" href="template-css/maquette.css" media="screen" />
	<link rel="stylesheet" href="template-css/maquetteJeux.css" media="screen" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- documentation de materiel icons : https://material.io/resources/icons -->

	
	<!-- <script src="script.js"></script> -->
</head>

<body>
	<div class="wrapper">
		<header class="bandeau">
			<?php include('bandeau.php'); ?> <!-- fais executer le programme bandeau.php -->
		</header>
			
		<main>
			<nav>
				<?php include('menu.php'); ?> <!-- fais executer le programme menu.php -->
			</nav>
			
			<section>
				<?php include($affiche); ?> <!--  -->
			</section>	
		</main>
		
		<footer>
			<?php include('pied_page.php'); ?> <!-- fais executer le programme pied_page.php -->
		</footer>
	</div>
</body>
</html>