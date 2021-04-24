-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2021 at 10:27 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_aurora`
--

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
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
-- Table structure for table `comments`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jeux_id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jeux_idi` (`jeux_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `jeux_id`, `url`) VALUES
(1, 1, 'https://cdn.akamai.steamstatic.com/steam/apps/374320/capsule_616x353.jpg?t=1608544497');

-- --------------------------------------------------------

--
-- Table structure for table `jeux`
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jeux`
--

INSERT INTO `jeux` (`id`, `title`, `image`, `prix`, `synopsis`, `PEGI`, `listePEGI`, `avis`, `avisPEGI`, `temps_jeux`, `coeur`) VALUES
(1, 'dark souls 3', 'assets\\Dark_Souls_III_jackette.png', 65, 'lorem ipsum ', 18, '', 'tres bon jeu wlh', '', 60, 1),
(2, 'animal crossing new horizons', 'https://upload.wikimedia.org/wikipedia/en/1/1f/Animal_Crossing_New_Horizons.jpg', 65, 'lorem ipsum ', 3, '', 'tres bon jeu wlh', '', 60, 1),
(3, 'need for speed heat', 'https://upload.wikimedia.org/wikipedia/en/7/7f/Cover_Art_of_Need_for_Speed_Heat.png', 65, 'lorem ipsum ', 16, '', 'tres bon jeu wlh', '', 60, 1),
(4, 'Zelda: Breath of the wild', 'https://upload.wikimedia.org/wikipedia/en/c/c6/The_Legend_of_Zelda_Breath_of_the_Wild.jpg', 65, 'lorem ipsum ', 12, '', 'tres bon jeu wlh', '', 60, 1),
(5, 'Ratchet et clank : rift apart ', 'https://upload.wikimedia.org/wikipedia/en/3/37/Ratchet_and_Clank_cover.jpg', 65, 'lorem ipsum ', 7, '', 'tres bon jeu wlh', '', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jeux_commandes`
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
-- Table structure for table `jeux_pegi`
--

DROP TABLE IF EXISTS `jeux_pegi`;
CREATE TABLE IF NOT EXISTS `jeux_pegi` (
  `jeux` int(11) NOT NULL,
  `pegi` int(11) NOT NULL,
  KEY `Pegi` (`pegi`),
  KEY `jeu` (`jeux`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jeux_pegi`
--

INSERT INTO `jeux_pegi` (`jeux`, `pegi`) VALUES
(1, 8),
(1, 4),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jeux_plateforme`
--

DROP TABLE IF EXISTS `jeux_plateforme`;
CREATE TABLE IF NOT EXISTS `jeux_plateforme` (
  `jeux` int(11) NOT NULL,
  `plateforme` int(11) NOT NULL,
  PRIMARY KEY (`jeux`,`plateforme`),
  KEY `plateformes` (`plateforme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jeux_plateforme`
--

INSERT INTO `jeux_plateforme` (`jeux`, `plateforme`) VALUES
(1, 1),
(3, 1),
(1, 2),
(3, 2),
(3, 3),
(2, 4),
(4, 4),
(5, 5),
(4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pegi`
--

DROP TABLE IF EXISTS `pegi`;
CREATE TABLE IF NOT EXISTS `pegi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegi`
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
-- Table structure for table `plateforme`
--

DROP TABLE IF EXISTS `plateforme`;
CREATE TABLE IF NOT EXISTS `plateforme` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `icon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plateforme`
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
-- Table structure for table `users`
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `pseudo`, `email`, `adresse`, `password`) VALUES
(1, 1, 'OoZoX', 'dev@admin.com', NULL, '$2y$10$EnNT/AkxeGi8UVsKQuwMg.Ftdkp/hyasnTm1ZQUcNs1X9WLVgOD22');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`jeux_id`) REFERENCES `jeux` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`jeux_id`) REFERENCES `jeux` (`id`);

--
-- Constraints for table `jeux_commandes`
--
ALTER TABLE `jeux_commandes`
  ADD CONSTRAINT `jeux_commandes_ibfk_1` FOREIGN KEY (`id_jeux`) REFERENCES `jeux` (`id`),
  ADD CONSTRAINT `jeux_commandes_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `commandes` (`id`);

--
-- Constraints for table `jeux_pegi`
--
ALTER TABLE `jeux_pegi`
  ADD CONSTRAINT `Pegi` FOREIGN KEY (`pegi`) REFERENCES `pegi` (`id`),
  ADD CONSTRAINT `jeu` FOREIGN KEY (`jeux`) REFERENCES `jeux` (`id`);

--
-- Constraints for table `jeux_plateforme`
--
ALTER TABLE `jeux_plateforme`
  ADD CONSTRAINT `jeux` FOREIGN KEY (`jeux`) REFERENCES `jeux` (`id`),
  ADD CONSTRAINT `plateformes` FOREIGN KEY (`plateforme`) REFERENCES `plateforme` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
