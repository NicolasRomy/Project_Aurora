-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2021 at 12:41 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `jeux_id`, `content`, `note`, `pseudo`) VALUES
(1, 1, 'rgZGQERGER', 7, 'eliot'),
(2, 1, 'Fzrfgqergqsrfger', 2, 'eliot'),
(3, 1, 'c nul', 3, 'jean'),
(4, 1, 'c tro b1', 10, 'phillip'),
(5, 1, ',hcvh', 8, 'OoZoX');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `jeux_id`, `url`) VALUES
(2, 1, 'dark-souls-3-img-1.jpg'),
(3, 1, 'dark-souls-3-img-2.jpg'),
(4, 1, 'dark-souls-3-img-3.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jeux`
--

INSERT INTO `jeux` (`id`, `title`, `image`, `prix`, `synopsis`, `PEGI`, `listePEGI`, `avis`, `avisPEGI`, `temps_jeux`, `coeur`) VALUES
(1, 'dark souls 3', 'dark-souls-3-jaquette.jpg', 65, 'Avec Dark Souls 3, From Software livre la conclusion magistrale d???une saga certes enrichie au fil des ??pisodes, mais toujours fid??le ?? son concept original. ??pique, magistral, haletant, coh??rent, les qualificatifs ??logieux ne manquent pas pour ce troisi??me volet chapeaut?? d???une main de ma??tre par un Hidetaka Miyazaki au sommet de sa vision artistique et ludique pour la licence. Le titre parvient ?? s???approprier et surtout ?? faire ??voluer les m??canismes issus de son passif pour en extraire un concentr?? de ma??trise ?? presque tous les niveaux. D??cors ?? couper le souffle, approche des combats plus nerveuse, comportement des ennemis am??lior?? et boss m??morables, tous ces ??l??ments participent ?? nous offrir ni plus ni moins que le meilleur des Souls !', 18, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Ce jeu a re??u un PEGI 18, cela restreint sa disponibilit?? pour les adultes uniquement\r\net ne convient pas aux personnes mineurs. Cette note a ??t?? donn??e car le  jeu contiens une forte violence,\r\ny compris ?? l\'encontre de personnage vuln??rable et sans d??fenses.\r\nIl y a aussi un fort usage de grossiert?? et de mots vulgaires', 60, 1),
(2, 'animal crossing new horizons', 'Animal_Crossing_New_Horizons_jackette.jpg', 25, 'lorem ipsum ', 3, '', 'tres bon jeu wlh', '', 60, 1),
(3, 'need for speed heat', 'Cover_Art_of_Need_for_Speed_Heat_jackette.png', 5, 'lorem ipsum ', 16, '', 'tres bon jeu wlh', '', 60, 1),
(4, 'Zelda: Breath of the wild', 'The_Legend_of_Zelda_Breath_of_the_Wild_jackette', 50, 'lorem ipsum ', 12, '', 'tres bon jeu wlh', '', 60, 1),
(5, 'Ratchet et clank : rift apart ', 'Ratchet_and_Clank_cover_jackette.jpg', 45, 'lorem ipsum ', 7, '', 'tres bon jeu wlh', '', 60, 1),
(6, 'Shadow of the colloseus', 'Shadow_of_thge_colossus.jpg', 32, 'lorem ipsum ', 12, '', 'un grand classique', 'tres beau jeu attention un peux violent!', 50, 1),
(7, 'luigi mansion 3', '608694bdb03e3.jpg', 45, 'ok', 7, '[\"13\"]', 'oklm', 'ca passe', 30, 1),
(8, 'the last of us 2', '6086957891730.jpg', 70, 'elle tue des mechants', 18, '[\"10\",\"11\",\"12\",\"13\",\"15\",\"16\"]', 'c tr??s violent', 'c vilent', 60, 1),
(9, 'spider-man', '608696863ba4e.jpg', 15, 'ezatqezry', 16, '[\"10\",\"12\",\"16\"]', 'eqryeqryt', 'qertyeryte', 45, 1),
(10, 'mario kart 8', '6086a923e8a14.jpg', 55, 'wegertae', 3, 'null', 'argerg', 'argwerfgaer', 150, 1),
(11, 'sonic racing', '6086a9c2432df.jpg', 5, 'aergqrg', 3, 'null', 'aert45', 'aerg5', 150, 1),
(12, 'pikmin 3', '6086aa58af940.jpg', 15, 'wgwr', 3, 'null', 'rg', 'areg', 150, 1),
(13, 'minecraft', '6086ab157a12c.jpg', 20, '3rfwefwerwrgegwrf', 7, '[\"16\"]', 'rgegrgdfvgerg', 'srfgerg', 400, 1),
(14, 'ninja go', '6086ab9714616.jpg', 25, 'sbsdger', 7, '[\"16\"]', 'sfvtrbrg', 'sgergerv', 25, 1),
(15, 'civilation 6', '6086acf663fef.jpg', 50, 'werfer', 12, '[\"14\",\"16\"]', 'defweefwerfgwefw', 'weferf', 100, 1),
(16, 'jump force', '6086ad783e4ed.jpg', 70, 'rgertgretrgtd', 12, '[\"10\",\"16\"]', 'dffgd', 'tesdvsdf', 80, 1),
(17, 'ARC', '6086add02383f.jpg', 30, 'sfwergerg', 16, '[\"13\",\"15\",\"16\"]', 'sdrfgsfg', 'argrgdrf', 300, 1),
(18, 'uncharted 3', '6086ae6e1add3.jpg', 7, 'awrtzertgrgetgd', 16, '[\"10\",\"11\",\"12\",\"16\"]', 'dgrt', 'dfgbfg', 15, 1),
(19, 'GTA 5', '6086b0266081a.jpg', 35, 'sdgvsdfgv', 18, '[\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\"]', 'dsfashra', 'srgrgsr', 60, 1),
(20, 'The witcher 3', '6086b18594484.jpg', 35, 'wetwefasdfe', 18, '[\"10\",\"11\",\"13\",\"15\",\"16\"]', 'sdgsdgsr', 'dgsdcs', 75, 1);

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
(8, 1),
(11, 1),
(13, 1),
(15, 1),
(16, 1),
(17, 1),
(19, 1),
(20, 1),
(1, 2),
(3, 2),
(11, 2),
(13, 2),
(14, 2),
(16, 2),
(17, 2),
(19, 2),
(20, 2),
(3, 3),
(6, 3),
(8, 3),
(9, 3),
(11, 3),
(13, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(2, 4),
(4, 4),
(7, 4),
(10, 4),
(12, 4),
(13, 4),
(5, 5),
(8, 5),
(9, 5),
(11, 5),
(13, 5),
(16, 5),
(17, 5),
(20, 5),
(4, 6),
(7, 6),
(10, 6),
(13, 6),
(13, 7),
(15, 7),
(13, 8),
(15, 8);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `pseudo`, `email`, `adresse`, `password`) VALUES
(1, 1, 'OoZoX', 'dev@admin.com', NULL, '$2y$10$EnNT/AkxeGi8UVsKQuwMg.Ftdkp/hyasnTm1ZQUcNs1X9WLVgOD22'),
(2, 0, 'eliot', 'ecros@gaming.tech', NULL, '$2y$10$.xBwFsfcCKNCVrb.7ahg7evjbW2hDRqxd5VoJqbapdsdSP8Dxjhkm');

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
