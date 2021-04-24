-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2021 at 10:23 AM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
