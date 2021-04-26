-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 avr. 2021 à 10:32
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_aurora`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `prix_total` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jeux_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `note` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jeux_id` (`jeux_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `jeux_id`, `content`, `note`, `pseudo`) VALUES
(1, 1, 'rgZGQERGER', 7, 'eliot'),
(2, 1, 'Fzrfgqergqsrfger', 2, 'eliot'),
(3, 1, 'c nul', 3, 'jean'),
(4, 1, 'c tro b1', 10, 'phillip'),
(5, 1, ',hcvh', 8, 'OoZoX');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jeux_id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jeux_idi` (`jeux_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `jeux_id`, `url`) VALUES
(2, 1, 'dark-souls-3-img-1.jpg'),
(3, 1, 'dark-souls-3-img-2.jpg'),
(4, 1, 'dark-souls-3-img-3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
CREATE TABLE IF NOT EXISTS `jeux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prix` float NOT NULL,
  `synopsis` text NOT NULL,
  `PEGI` int(11) NOT NULL,
  `listePEGI` varchar(100) NOT NULL,
  `avis` text NOT NULL,
  `avisPEGI` text NOT NULL,
  `temps_jeux` int(11) NOT NULL,
  `coeur` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`id`, `title`, `image`, `prix`, `synopsis`, `PEGI`, `listePEGI`, `avis`, `avisPEGI`, `temps_jeux`, `coeur`) VALUES
(1, 'dark souls 3', 'dark-souls-3-jaquette.jpg', 65, 'Avec Dark Souls 3, From Software livre la conclusion magistrale d’une saga certes enrichie au fil des épisodes, mais toujours fidèle à son concept original. Épique, magistral, haletant, cohérent, les qualificatifs élogieux ne manquent pas pour ce troisième volet chapeauté d’une main de maître par un Hidetaka Miyazaki au sommet de sa vision artistique et ludique pour la licence. Le titre parvient à s’approprier et surtout à faire évoluer les mécanismes issus de son passif pour en extraire un concentré de maîtrise à presque tous les niveaux. Décors à couper le souffle, approche des combats plus nerveuse, comportement des ennemis amélioré et boss mémorables, tous ces éléments participent à nous offrir ni plus ni moins que le meilleur des Souls !', 18, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Ce jeu a reçu un PEGI 18, cela restreint sa disponibilité pour les adultes uniquement\r\net ne convient pas aux personnes mineurs. Cette note a été donnée car le  jeu contiens une forte violence,\r\ny compris à l\'encontre de personnage vulnérable et sans défenses.\r\nIl y a aussi un fort usage de grossierté et de mots vulgaires', 60, 1),
(2, 'animal crossing new horizons', 'Animal_Crossing_New_Horizons_jackette.jpg', 25, 'lorem ipsum ', 3, '', 'tres bon jeu wlh', '', 60, 1),
(3, 'need for speed heat', 'Cover_Art_of_Need_for_Speed_Heat_jackette.png', 5, 'lorem ipsum ', 16, '', 'tres bon jeu wlh', '', 60, 0),
(4, 'Zelda: Breath of the wild', 'The_Legend_of_Zelda_Breath_of_the_Wild_jackette', 50, 'lorem ipsum ', 12, '', 'tres bon jeu wlh', '', 60, 1),
(5, 'Ratchet et clank : rift apart ', 'Ratchet_and_Clank_cover_jackette.jpg', 45, 'lorem ipsum ', 7, '', 'tres bon jeu wlh', '', 60, 1),
(6, 'Shadow of the colloseus', 'Shadow_of_thge_colossus.jpg', 32, 'lorem ipsum ', 12, '', 'un grand classique', 'tres beau jeu attention un peux violent!', 50, 0),
(7, 'luigi mansion 3', '608694bdb03e3.jpg', 45, 'ok', 7, '[\"13\"]', 'oklm', 'ca passe', 30, 0),
(8, 'the last of us 2', '6086957891730.jpg', 70, 'elle tue des mechants', 18, '[\"10\",\"11\",\"12\",\"13\",\"15\",\"16\"]', 'c très violent', 'c vilent', 60, 0),
(9, 'spider-man', '608696863ba4e.jpg', 15, 'ezatqezry', 16, '[\"10\",\"12\",\"16\"]', 'eqryeqryt', 'qertyeryte', 45, 0);

-- --------------------------------------------------------

--
-- Structure de la table `jeux_commandes`
--

DROP TABLE IF EXISTS `jeux_commandes`;
CREATE TABLE IF NOT EXISTS `jeux_commandes` (
  `id_commande` int(11) NOT NULL,
  `id_jeux` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  KEY `id_jeux` (`id_jeux`),
  KEY `id_commande` (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `jeux_pegi`
--

DROP TABLE IF EXISTS `jeux_pegi`;
CREATE TABLE IF NOT EXISTS `jeux_pegi` (
  `jeux` int(11) NOT NULL,
  `pegi` int(11) NOT NULL,
  KEY `Pegi` (`pegi`),
  KEY `jeu` (`jeux`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeux_pegi`
--

INSERT INTO `jeux_pegi` (`jeux`, `pegi`) VALUES
(1, 8),
(1, 4),
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `jeux_plateforme`
--

DROP TABLE IF EXISTS `jeux_plateforme`;
CREATE TABLE IF NOT EXISTS `jeux_plateforme` (
  `jeux` int(11) NOT NULL,
  `plateforme` int(11) NOT NULL,
  PRIMARY KEY (`jeux`,`plateforme`),
  KEY `plateformes` (`plateforme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeux_plateforme`
--

INSERT INTO `jeux_plateforme` (`jeux`, `plateforme`) VALUES
(1, 1),
(3, 1),
(8, 1),
(1, 2),
(3, 2),
(3, 3),
(6, 3),
(8, 3),
(9, 3),
(2, 4),
(4, 4),
(7, 4),
(5, 5),
(8, 5),
(9, 5),
(4, 6),
(7, 6);

-- --------------------------------------------------------

--
-- Structure de la table `pegi`
--

DROP TABLE IF EXISTS `pegi`;
CREATE TABLE IF NOT EXISTS `pegi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pegi`
--

INSERT INTO `pegi` (`id`, `nom`, `icon`) VALUES
(1, 'langage grossier', 'assets\\pegi\\bad-language.jpg'),
(2, 'discrimination', 'assets\\pegi\\discrimination.jpg'),
(3, 'drogues', 'assets\\pegi\\drugs.jpg'),
(4, 'peur', 'assets\\pegi\\fear.jpg'),
(5, 'jeux de hasard', 'assets\\pegi\\gambling.jpg'),
(6, 'in game purchases', 'assets\\pegi\\in-game-purchases.jpeg'),
(7, 'sexe', 'assets\\pegi\\sexual-content.jpg'),
(8, 'violence', 'assets\\pegi\\violence.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `plateforme`
--

DROP TABLE IF EXISTS `plateforme`;
CREATE TABLE IF NOT EXISTS `plateforme` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `icon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plateforme`
--

INSERT INTO `plateforme` (`id`, `name`, `icon`) VALUES
(1, 'PC', 'assets/logoPlatformes/PC.png'),
(2, 'xbox series', 'assets\\logoPlatformes\\XB.png'),
(3, 'PS4', 'assets\\logoPlatformes\\PS4.png'),
(4, 'SWITCH', 'assets\\logoPlatformes\\NS.png'),
(5, 'PS5', 'assets\\logoPlatformes\\PS5.png'),
(6, 'WII U', 'assets\\logoPlatformes\\WU.png'),
(7, 'MAC', 'assets\\logoPlatformes\\AP.png'),
(8, 'LINUX', 'assets\\logoPlatformes\\LX.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `admin`, `pseudo`, `email`, `adresse`, `password`) VALUES
(1, 1, 'OoZoX', 'dev@admin.com', NULL, '$2y$10$EnNT/AkxeGi8UVsKQuwMg.Ftdkp/hyasnTm1ZQUcNs1X9WLVgOD22'),
(2, 0, 'eliot', 'ecros@gaming.tech', NULL, '$2y$10$.xBwFsfcCKNCVrb.7ahg7evjbW2hDRqxd5VoJqbapdsdSP8Dxjhkm');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`jeux_id`) REFERENCES `jeux` (`id`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`jeux_id`) REFERENCES `jeux` (`id`);

--
-- Contraintes pour la table `jeux_commandes`
--
ALTER TABLE `jeux_commandes`
  ADD CONSTRAINT `jeux_commandes_ibfk_1` FOREIGN KEY (`id_jeux`) REFERENCES `jeux` (`id`),
  ADD CONSTRAINT `jeux_commandes_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `commandes` (`id`);

--
-- Contraintes pour la table `jeux_pegi`
--
ALTER TABLE `jeux_pegi`
  ADD CONSTRAINT `Pegi` FOREIGN KEY (`pegi`) REFERENCES `pegi` (`id`),
  ADD CONSTRAINT `jeu` FOREIGN KEY (`jeux`) REFERENCES `jeux` (`id`);

--
-- Contraintes pour la table `jeux_plateforme`
--
ALTER TABLE `jeux_plateforme`
  ADD CONSTRAINT `jeux` FOREIGN KEY (`jeux`) REFERENCES `jeux` (`id`),
  ADD CONSTRAINT `plateformes` FOREIGN KEY (`plateforme`) REFERENCES `plateforme` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
