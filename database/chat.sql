-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 11 Mai 2019 à 22:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expediteur` varchar(60) COLLATE utf8_bin NOT NULL,
  `destinataire` varchar(60) COLLATE utf8_bin NOT NULL,
  `message` mediumtext COLLATE utf8_bin NOT NULL,
  `date_envoie` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `expediteur`, `destinataire`, `message`, `date_envoie`) VALUES
(1, 'mohamed@gmail.com', 'tokosel@gmail.com', 'salut', '2018-10-19 15:28:34'),
(2, 'tokosel@gmail.com', 'mohamed@gmail.com', 'cva toi?', '2018-10-19 15:29:21'),
(3, 'tokosel@gmail.com', 'mohamed@gmail.com', 'tu es là?', '2018-10-19 15:43:03'),
(4, 'tokosel@gmail.com', 'mohamed@gmail.com', 'zzf', '2018-11-11 13:46:00'),
(5, 'tokosel@gmail.com', 'mohamed@gmail.com', 'zfefrr', '2018-11-11 13:46:12');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(60) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `password`) VALUES
(1, 'tokosel', 'tokosel@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'mohamed', 'mohamed@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
