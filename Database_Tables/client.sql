-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 27 nov. 2019 à 21:05
-- Version du serveur :  5.7.26
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fresco`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Cin` int(8) NOT NULL,
  `Nom` varchar(25) DEFAULT NULL,
  `Prenom` varchar(25) DEFAULT NULL,
  `Pseudo` varchar(25) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Newsletter` int(11) DEFAULT NULL,
  `Adresse` varchar(100) DEFAULT NULL,
  `Code_Postal` int(11) DEFAULT NULL,
  `Mdp` varchar(100) DEFAULT NULL,
  `Role` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Cin`, `Nom`, `Prenom`, `Pseudo`, `Email`, `Newsletter`, `Adresse`, `Code_Postal`, `Mdp`, `Role`) VALUES
(12345987, NULL, NULL, NULL, 'sumpar@hotmail.fr', NULL, NULL, NULL, '123', 1),
(7485968, NULL, NULL, NULL, 'selim@hotmail.fr', NULL, NULL, NULL, '456', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
