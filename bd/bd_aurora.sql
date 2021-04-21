-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 21 avr. 2021 à 13:05
-- Version du serveur :  8.0.23
-- Version de PHP : 8.0.3

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
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `prix_total` int NOT NULL,
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
  `id` int NOT NULL AUTO_INCREMENT,
  `jeux_id` int NOT NULL,
  `content` text NOT NULL,
  `note` int NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jeux_id` (`jeux_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jeux_id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jeux_idi` (`jeux_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `jeux_id`, `title`, `url`) VALUES
(1, 1, 'dark souls 3', 'https://cdn.akamai.steamstatic.com/steam/apps/374320/capsule_616x353.jpg?t=1608544497');

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
CREATE TABLE IF NOT EXISTS `jeux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prix` float NOT NULL,
  `synopsis` text NOT NULL,
  `PEGI` int NOT NULL,
  `avis` text NOT NULL,
  `temps_jeux` int NOT NULL,
  `coeur` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`id`, `title`, `image`, `prix`, `synopsis`, `PEGI`, `avis`, `temps_jeux`, `coeur`) VALUES
(1, 'dark souls 3', 'https://cdn.akamai.steamstatic.com/steam/apps/374320/capsule_616x353.jpg?t=1608544497', 65, 'lorem ipsum ', 18, 'tres bon jeu wlh', 60, 1),
(2, 'animal crossing new horizons', 'https://upload.wikimedia.org/wikipedia/en/1/1f/Animal_Crossing_New_Horizons.jpg', 65, 'lorem ipsum ', 3, 'tres bon jeu wlh', 60, 1),
(3, 'need for speed heat', 'https://upload.wikimedia.org/wikipedia/en/7/7f/Cover_Art_of_Need_for_Speed_Heat.png', 65, 'lorem ipsum ', 16, 'tres bon jeu wlh', 60, 1),
(4, 'Zelda: Breath of the wild', 'https://upload.wikimedia.org/wikipedia/en/c/c6/The_Legend_of_Zelda_Breath_of_the_Wild.jpg', 65, 'lorem ipsum ', 12, 'tres bon jeu wlh', 60, 1),
(5, 'Ratchet et clank : rift apart ', 'https://upload.wikimedia.org/wikipedia/en/3/37/Ratchet_and_Clank_cover.jpg', 65, 'lorem ipsum ', 7, 'tres bon jeu wlh', 60, 1);

-- --------------------------------------------------------

--
-- Structure de la table `jeux_commandes`
--

DROP TABLE IF EXISTS `jeux_commandes`;
CREATE TABLE IF NOT EXISTS `jeux_commandes` (
  `id_commande` int NOT NULL,
  `id_jeux` int NOT NULL,
  `quantity` int NOT NULL,
  KEY `id_jeux` (`id_jeux`),
  KEY `id_commande` (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pegi`
--

DROP TABLE IF EXISTS `pegi`;
CREATE TABLE IF NOT EXISTS `pegi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jeux_id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jeux_id` (`jeux_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin` tinyint(1) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Contraintes pour la table `pegi`
--
ALTER TABLE `pegi`
  ADD CONSTRAINT `pegi_ibfk_1` FOREIGN KEY (`jeux_id`) REFERENCES `jeux` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
