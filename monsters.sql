-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 03 fév. 2019 à 16:34
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monsters`
--

-- --------------------------------------------------------

--
-- Structure de la table `monstre`
--

DROP TABLE IF EXISTS `monstre`;
CREATE TABLE IF NOT EXISTS `monstre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `bio` varchar(250) DEFAULT NULL,
  `filename` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `monstre`
--

INSERT INTO `monstre` (`id`, `name`, `age`, `weight`, `bio`, `filename`) VALUES
(1, 'infernaltree', 10, 5, 'Hi I am Infernaltree', 'infernaltree.png'),
(2, 'Toxinscream', 20, 10, 'Hi I am Toxinscream', 'toxinscream.png'),
(3, 'Acidpaw', 30, 15, 'Hi I am Acidpaw', 'acidpaw.png'),
(4, 'Barbling', 40, 20, 'Hi I am Barbling', 'barbling.png');

-- --------------------------------------------------------

--
-- Structure de la table `monstre2`
--

DROP TABLE IF EXISTS `monstre2`;
CREATE TABLE IF NOT EXISTS `monstre2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `strength` int(11) DEFAULT NULL,
  `life` int(11) DEFAULT NULL,
  `type` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `monstre2`
--

INSERT INTO `monstre2` (`id`, `name`, `strength`, `life`, `type`) VALUES
(10, 'Domovoi', 30, 300, 'water'),
(7, 'Wendigos', 1000, 450, 'earth'),
(6, 'Domovoi', 30, 300, 'water'),
(9, 'Sirrush', 250, 1500, 'fire'),
(11, 'Thunderbird', 400, 500, 'air');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
