-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 20 oct. 2020 à 10:27
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `base-test-jeu-evolution`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `idJeu` int(10) UNSIGNED NOT NULL,
  `idMembre` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idJeu`,`idMembre`),
  KEY `idMembre` (`idMembre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`idJeu`, `idMembre`, `commentaire`, `date`) VALUES
(1, 1, 'Un jeu d\'anthologie !', '2020-08-20'),
(2, 2, 'Pour moi, le meilleur jeu au monde !', '2020-08-20'),
(3, 1, 'Un jeu grand, beau et complet comme on en voit rarement de nos jours', '2020-08-20'),
(4, 1, 'Un excellent jeu de kart !', '2020-08-20'),
(5, 3, 'Un jeu de baston délirant !', '2020-08-20'),
(6, 2, 'Le plus beau jeu de baston jamais créé', '2020-08-20'),
(7, 2, 'Un jeu de beach volley de toute beauté o_O', '2020-08-20'),
(8, 3, 'Plutôt bof comme jeu, mais ça complète bien le film', '2020-08-20'),
(9, 3, 'Très réaliste, une sorte de film noir sur fond d\'histoire d\'amour. A essayer !', '2020-08-20'),
(10, 1, 'Le paradis des Yoshis :o)', '2020-08-20'),
(11, 1, 'Un bon jeux d\'action où on dirige un commando pendant la 2 ème guerre mondiale !!', '2020-08-20'),
(12, 2, 'Encore un Final Fantasy mais celui la est encore plus beau !', '2020-08-20'),
(13, 1, 'Pika-Pika-chu !!!', '2020-08-20'),
(15, 3, 'Comme dans les autres Gta on ecrsase tout le monde :) .', '2020-08-20'),
(16, 3, 'Superbe ! o_O', '2020-08-20'),
(17, 2, 'Comme le dessin Animé !', '2020-08-20'),
(19, 1, 'Un très bon jeux de snow !', '2020-08-20'),
(21, 2, 'Un jeux de foot assez bof ...', '2020-08-20'),
(23, 2, 'Un jeu censé ressembler a la série mais assez raté ...', '2020-08-20'),
(25, 1, 'Comme sur PC mais la c\'est sur un ecran de télé :) !', '2020-08-20'),
(26, 2, 'Le célèbre jeu de combat !', '2020-08-20'),
(27, 1, 'jeu japonais dont le gameplay est un peu limité. Peu de robots malheureusement', '2020-08-20'),
(28, 1, 'Vivez l\'avanture de l\'homme araignée', '2020-08-20'),
(29, 3, 'Dans la suite des autres versions de Midtown Madness', '2020-08-20'),
(30, 1, 'Qui ne connait pas ? ', '2020-08-20'),
(31, 3, 'Un super un film et un jeu de m*rde ...', '2020-08-20'),
(32, 2, 'Un petit jeu de foot sur PS2', '2020-08-20'),
(33, 3, 'Jamais joué mais a mon avis ca parle de hockey sur glace ... =)', '2020-08-20'),
(34, 1, 'Les JO de sydneys dans votre salon !', '2020-08-20'),
(35, 2, 'A votre avis :p ?', '2020-08-20'),
(36, 3, 'un shut\'um up pour pc', '2020-08-20'),
(37, 1, 'Conduite de taxi en folie !', '2020-08-20'),
(38, 4, 'le jeu de l\'émission', '2020-08-20'),
(39, 3, 'Le premier jeu de foot sur la N64 =) !', '2020-08-20'),
(40, 1, 'le jeu de l\'émission', '2020-08-20'),
(41, 5, 'Bheuuu le monopoly sur N64 !', '2020-08-20'),
(42, 6, 'un jeu de voiture sur le film', '2020-08-20'),
(43, 1, 'Notre avanturier préféré est de retour !!!', '2020-08-20'),
(44, 4, 'Un super jeux de course futuriste !', '2020-08-20'),
(45, 4, 'Abracadabra !! le célebre magicien est de retour !', '2020-08-20'),
(46, 6, 'L\'autre meilleur jeux de tout les temps (surtout ses mods , cs, ns ,dod , etc ).', '2020-08-20'),
(47, 5, 'Un jeu de réflexion', '2020-08-20'),
(48, 5, 'Wario vs Mario ! Qui gagnera ! ?', '2020-08-20'),
(49, 1, 'Jeu de gestion d\'un parc d\'attraction', '2020-08-20'),
(50, 2, 'Jeu magnifique !', '2020-08-20');

-- --------------------------------------------------------

--
-- Structure de la table `console`
--

DROP TABLE IF EXISTS `console`;
CREATE TABLE IF NOT EXISTS `console` (
  `idConsole` int(11) NOT NULL,
  `nomConsole` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`idConsole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `console`
--

INSERT INTO `console` (`idConsole`, `nomConsole`) VALUES
(1, 'NES'),
(2, 'Megadrive'),
(3, 'Nintendo 64'),
(4, 'GameCube'),
(5, 'Xbox'),
(6, 'PC'),
(7, 'SuperNES'),
(8, 'PS2'),
(9, 'GBA'),
(10, 'PS'),
(11, 'Gameboy'),
(12, 'Dreamcast'),
(13, 'Wii U'),
(14, 'Nintendo Switch');

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

DROP TABLE IF EXISTS `jeu`;
CREATE TABLE IF NOT EXISTS `jeu` (
  `idJeu` int(10) UNSIGNED NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `nom` varchar(100) NOT NULL DEFAULT '',
  `console` int(11) DEFAULT NULL,
  `prixMoyen` decimal(10,0) NOT NULL DEFAULT 0,
  `nbJoueursMax` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idJeu`),
  KEY `console` (`console`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`idJeu`, `photo`, `nom`, `console`, `prixMoyen`, `nbJoueursMax`) VALUES
(1, NULL, 'Super Mario Bros', 1, '25', 1),
(2, NULL, 'Sonic', 2, '20', 1),
(3, NULL, 'Zelda : ocarina of time', 3, '15', 1),
(4, NULL, 'Mario Kart 64', 3, '25', 4),
(5, NULL, 'Super Smash Bros Melee', 4, '55', 4),
(6, 'dead_or_alive.jpg', 'Dead or Alive', 5, '60', 4),
(7, NULL, 'Dead or Alive Xtreme Beach Volley Ball', 5, '60', 4),
(8, NULL, 'Enter the Matrix', 6, '45', 1),
(9, NULL, 'Max Payne 2', 6, '50', 1),
(10, NULL, 'Yoshi\'s Island', 7, '15', 1),
(11, NULL, 'Commandos 3', 6, '44', 12),
(12, NULL, 'Final Fantasy X', 8, '40', 1),
(13, NULL, 'Pokemon Rubis', 9, '44', 4),
(14, NULL, 'Starcraft', 6, '19', 8),
(15, NULL, 'Grand Theft Auto 3', 8, '30', 1),
(16, NULL, 'Homeworld 2', 6, '45', 6),
(17, 'aladdin.jpg', 'Aladdin', 7, '10', 1),
(18, NULL, 'Super Mario Bros 3', 7, '10', 2),
(19, NULL, 'SSX 3', 5, '56', 2),
(20, NULL, 'Star Wars : Jedi outcast', 5, '33', 1),
(21, 'actua_soccer.jpg', 'Actua Soccer 3', 10, '30', 2),
(22, NULL, 'Time Crisis 3', 8, '40', 1),
(23, NULL, 'X-FILES', 10, '25', 1),
(24, NULL, 'Soul Calibur 2', 5, '54', 1),
(25, NULL, 'Diablo', 10, '20', 1),
(26, NULL, 'Street Fighter 2', 2, '10', 2),
(27, NULL, 'Gundam Battle Assault 2', 10, '29', 1),
(28, NULL, 'Spider-Man', 2, '15', 1),
(29, NULL, 'Midtown Madness 3', 5, '59', 6),
(30, NULL, 'Tetris', 11, '5', 1),
(31, NULL, 'The Rocketeer', 1, '5', 1),
(32, NULL, 'Pro Evolution Soccer 3', 8, '59', 2),
(33, NULL, 'Ice Hockey', 1, '7', 2),
(34, NULL, 'Sydney 2000', 12, '15', 2),
(35, NULL, 'NBA 2k', 12, '12', 2),
(36, 'alien_vs_predator.jpg', 'Aliens Versus Predator : Extinction', 8, '20', 2),
(37, NULL, 'Crazy Taxi', 12, '11', 1),
(38, NULL, 'Le Maillon Faible', 8, '10', 1),
(39, NULL, 'FIFA 64', 3, '25', 2),
(40, NULL, 'Qui Veut Gagner Des Millions', 8, '10', 1),
(41, NULL, 'Monopoly', 3, '21', 4),
(42, NULL, 'Taxi 3', 8, '19', 4),
(43, NULL, 'Indiana Jones Et Le Tombeau De L\'Empereur', 8, '25', 1),
(44, NULL, 'F-ZERO', 9, '25', 4),
(45, NULL, 'Harry Potter Et La Chambre Des Secrets', 5, '30', 1),
(46, NULL, 'Half-Life', 6, '15', 32),
(47, NULL, 'Myst III Exile', 5, '49', 1),
(48, NULL, 'Wario World', 4, '40', 4),
(49, NULL, 'Rollercoaster Tycoon', 5, '29', 1),
(50, NULL, 'Splinter Cell', 5, '53', 1),
(51, NULL, 'Minecraft', NULL, '15', 8),
(52, NULL, 'Les Sims 4', NULL, '25', 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `idMembre` int(11) NOT NULL,
  `nomMembre` varchar(50) NOT NULL DEFAULT '',
  `parrain` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMembre`),
  KEY `parrain` (`parrain`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idMembre`, `nomMembre`, `parrain`) VALUES
(1, 'Florent', NULL),
(2, 'Patrick', 1),
(3, 'Margaux', NULL),
(4, 'Mathieu', 1),
(5, 'Aurore', 3),
(6, 'Corentin', 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`idJeu`) REFERENCES `jeu` (`idJeu`),
  ADD CONSTRAINT `avis_ibfk_2` FOREIGN KEY (`idMembre`) REFERENCES `membre` (`idMembre`);

--
-- Contraintes pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD CONSTRAINT `jeu_ibfk_1` FOREIGN KEY (`console`) REFERENCES `console` (`idConsole`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `membre_ibfk_1` FOREIGN KEY (`parrain`) REFERENCES `membre` (`idMembre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
