-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 04 avr. 2018 à 09:58
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `flimotek`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `username`, `password`, `adresse`, `tel`, `email`) VALUES
(17, 'Ayce', '47bce5c74f589f4867dbd57e9ca9f808', '510', '07', 'evan.j@hotmail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `user_id` varchar(16) NOT NULL,
  `film_id` varchar(16) NOT NULL,
  `commande_date` varchar(32) NOT NULL,
  PRIMARY KEY (`commande_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `film_num` int(8) NOT NULL,
  `film_titre` varchar(32) NOT NULL,
  `film_genre` varchar(16) NOT NULL,
  `film_format` varchar(16) NOT NULL,
  `film_date` varchar(16) NOT NULL,
  `film_prix` int(16) NOT NULL,
  `film_etat` varchar(16) NOT NULL,
  `film_image` varchar(32) NOT NULL,
  `film_resume` varchar(20000) NOT NULL,
  PRIMARY KEY (`film_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`film_num`, `film_titre`, `film_genre`, `film_format`, `film_date`, `film_prix`, `film_etat`, `film_image`, `film_resume`) VALUES
(1, 'Avatar', 'Action', 'DVD', '28/04/2015', 13, 'NOF', 'avatar.png', 'Malgré sa paralysie, Jake Sully, un ancien marine immobilisé dans un fauteuil roulant, est resté un combattant au plus profond de son être. Il est recruté pour se rendre à des années-lumière de la Terre, sur Pandora, où de puissants groupes industriels exploitent un minerai rarissime destiné à résoudre la crise énergétique sur Terre. Parce que l\'atmosphère de Pandora est toxique pour les humains, ceux-ci ont créé le Programme Avatar, qui permet à des \" pilotes \" humains de lier leur esprit à un avatar, un corps biologique commandé à distance, capable de survivre dans cette atmosphère létale. Ces avatars sont des hybrides créés génétiquement en croisant l\'ADN humain avec celui des Na\'vi, les autochtones de Pandora.\r\nSous sa forme d\'avatar, Jake peut de nouveau marcher. On lui confie une mission d\'infiltration auprès des Na\'vi, devenus un obstacle trop conséquent à l\'exploitation du précieux minerai. Mais tout va changer lorsque Neytiri, une très belle Na\'vi, sauve la vie de Jake...'),
(2, 'Mario', 'Action', 'DVD', '25/01/1999', 54, 'Neuf', 'mario.jpg', 'Mario et Luigi sont deux frères plombiers italo-américains à Brooklyn, qui se retrouvent transportés dans une autre dimension où ils doivent affronter Koopa, dictateur d\'un peuple constitué de dinosaures ayant évolué en forme humaine. Koopa a kidnappé la princesse Daisy, jeune et belle archéologue, qui détient une pierre possédant un pouvoir mystérieux.\r\nInspiré du jeu video \"Super Mario\", ce film raconte l\'histoire d\'un peuple de dinosaures vivant pacifiquement sous la Terre, menacés par un tyran qui, pour arriver à ses fins, kidnappe Daisy, jeune et belle archéologue. Les frères Mario, plombiers, se rendent dans ce monde souterrain afin d\'aider la jeune fille à s\'échapper.\r\nJe trouve ce film en effet très différent du jeu vide, mais il faut dire qu\'il est amusent. Notamment les célèbres répliques qu\'ils disent. Je l\'ai trouvé très bien.\r\nIncroyable!Jamais une adaptation de jeu vidéo en film n\'a été aussi médiocre!L\'univers coloré et mignon laisse place à un univers futuriste et noir(!).Peach laisse place à Daisy, Luigi sans moustache (!!)et Bowser est humain!C\'est une blague!Ce film n\'a de Mario que son nom!Quelle honte!Pire que la série!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
