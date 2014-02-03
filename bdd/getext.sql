-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 03 Février 2014 à 15:26
-- Version du serveur: 5.6.12
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `getext`
--
CREATE DATABASE IF NOT EXISTS `getext` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `getext`;

-- --------------------------------------------------------

--
-- Structure de la table `gt_poemes`
--

DROP TABLE IF EXISTS `gt_poemes`;
CREATE TABLE IF NOT EXISTS `gt_poemes` (
  `id_poeme` int(11) NOT NULL AUTO_INCREMENT,
  `texte` text COLLATE utf8_unicode_ci NOT NULL,
  `params` text COLLATE utf8_unicode_ci NOT NULL,
  `maj` datetime NOT NULL,
  PRIMARY KEY (`id_poeme`),
  KEY `id_poeme` (`id_poeme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `gt_poemes`
--

INSERT INTO `gt_poemes` (`id_poeme`, `texte`, `params`, `maj`) VALUES
(1, 'kjdfh qjdhf fdmlq djooiu'''' ''lkn'' &ààçè§', '', '2014-01-29 12:55:49'),
(2, 'super ça marche', '', '2014-01-29 13:28:12'),
(3, 't''est certain ?', '', '2014-01-29 13:28:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
