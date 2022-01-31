<?php
	/* Détermination du nom de la page à charger après vérification de sa validité */
	$cheminPagesAffiche = "pages/"; 
    $cheminPagesConfig = "config/"; 
    
    /* choix de la valeur de la variable $affiche en fonction de parametre page transmis */
	$affiche = "lostinspace.php";

	if (!isset($_GET['page'])){ //
		$affiche = "presentation.php";
	} 
	else {
		switch ($_GET['page']) {
			case (""):
				$affiche = "presentation.php";
				break;
			case ("agenda"):
				$affiche = "calendrier.php";
				break;
			case ("accueil"):
				$affiche = "presentation.php";
				break;
			case ("jeux"):
				$affiche = "jeux.php";
				break;
			case ("commentaires"):
				$affiche = "commentaires.php";
				break;
			case ("contact"):
				$affiche = "contact.php";
				break;		
			default:
				$affiche = "lostinspace.php";	
		}			
	}


	/* Chargement page de config par défaut */
    include($cheminPagesConfig.'default-config.php');
    
	/* Par convention, il peut exister une page de configuration du même nom mais avec un préfixe "config-" */
	$config = $cheminPagesConfig."config-".$affiche;
	@include($config); // l'arobas permet de ne pas afficher d'erreur si le fichier de configuration de la page n'existe pas (par exemple pour page 2)
    
    /* concatenation du chemin du dossier contenant les pages avec le contenu de $affiche */
    $affiche = $cheminPagesAffiche . $affiche; 
?>