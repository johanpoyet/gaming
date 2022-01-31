<?php
	echo '<h1 class="entry-title">Liste des jeux en fonction des consoles</h1>';
	

	$SQL = "SELECT idConsole, nomConsole FROM console ORDER BY 2 ASC";
	$stmt = $connexion->prepare($SQL);
	$stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
	$consoles = $stmt->fetchAll(); // on met le resultat de la requete dans un tableau à 2 dimensions
	//var_dump($consoles); // on affiche le contenu de la variable $consoles (ici un tableau php array())
	$stmt->closeCursor(); // on ferme le curseur des résultats
?>

<form method="post" action="index.php?page=jeux">
	<select name="console">
		<option value="">--sélectionner une console--</option>
			<?php
			foreach ($consoles as $console) {
				$selected = "";
				if ((isset($_POST['console'])) && ($_POST['console']==$console['idConsole'])) {
					$selected = "selected";
				}
				echo '<option value="'.$console['idConsole'].'" '.$selected.'>'.$console['nomConsole'].'</option>';
			}
			?>
	</select>
	<input type="submit" value="Charger les jeux" title="Charger les jeux" />
</form>



<?php
	if ((isset($_POST['console'])) && ($_POST['console'] != "")) {
		$idConsole = $_POST['console'];
		$SQL = "SELECT nomConsole FROM console WHERE idConsole = ? ";
		$stmt = $connexion->prepare($SQL);
		$stmt->execute(array($idConsole)); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
		$console = $stmt->fetch(); // on met le resultat de la requete dans un tableau 
		$stmt->closeCursor(); // on ferme le curseur des résultats

		$SQL = "SELECT * FROM jeu WHERE console = ? ORDER BY 1 ASC ";
		$stmt = $connexion->prepare($SQL);
		$stmt->execute(array($idConsole)); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun le numero de console)
		$jeux = $stmt->fetchAll(); // on met le resultat de la requete dans un tableau
		//var_dump($jeux); // on affiche le contenu de la variable $jeux (ici un tableau php array())
		$stmt->closeCursor(); // on ferme le curseur des résultats

		if (count($jeux) == 0){
			$nbJeux = "pas de jeux" ; // inutile, on peut remplacer le test pas une initialisation
		}
		else {
			$nbJeux = count($jeux)." jeux";
			if (count($jeux) == 1){
				$nbJeux = "1 jeu";
			}
		}

		echo '<h4>Liste des jeux '.$console['nomConsole'].'('.$nbJeux.')</h4>';

		echo '<ul>';
		foreach ($jeux as $jeu) {
			echo '<li><a href="index.php?page=jeux&idjeu='.$jeu['idJeu'].'">'.$jeu['nom'].' ('.$jeu['prixMoyen'].' euros)</a></li>';
		}
		echo '</ul>';
	} else {
		echo '<h4>veuillez selectionner une console</h4>';
	}
?>

