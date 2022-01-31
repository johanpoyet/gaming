<?php
	/* Détermination du nom de la page à charger après vérification de sa validité */
	if (isset($_GET['menu'])) {
		$menu = $_GET['menu'];
	}
	else {
		$menu = "membre";
	}
	/* modifier pour que le choix par défaut soit l'affichage par jeu */
	

	
	if ($menu == "jeu") {
		
		$resultats=$connexion->query("SELECT * FROM jeu ORDER BY 2 ASC"); // on va chercher tous les possesseurs dans la table jeux_video (résultat trié par ordre croissant)
		$resultats->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet
		while( $ligne = $resultats->fetch() ) // on récupère la liste des membres
		{
			echo '<a href="?page=commentaires&menu='.$menu.'&jeu='.$ligne->idJeu.'" >'.$ligne->nom.'</a><br/>'; // on affiche les jeux sous forme de liens
		}
		$resultats->closeCursor(); // on ferme le curseur des résultats
	}
	else {
		$resultats=$connexion->query("SELECT * FROM membre ORDER BY 2 ASC"); // on va chercher tous les possesseurs dans la table jeux_video (résultat trié par ordre croissant)
		$resultats->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet
		while( $ligne = $resultats->fetch() ) // on récupère la liste des membres
		{
			echo '<a href="?page=commentaires&menu='.$menu.'&membre='.$ligne->idMembre.'" >'.$ligne->nomMembre.'</a><br/>'; // on affiche les membres sous forme de liens
		}
		$resultats->closeCursor(); // on ferme le curseur des résultats
		
	}
	
	
	
?>