-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 30 oct. 2018 à 06:42
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestiondevente`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `codeCli` varchar(11) NOT NULL,
  `nomCli` char(55) DEFAULT NULL,
  `adresseCli` char(55) DEFAULT NULL,
  PRIMARY KEY (`codeCli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`codeCli`, `nomCli`, `adresseCli`) VALUES
('CL02', 'pross', 'fianarantsoa'),
('CL03', 'rakoto', 'ambalavao');

-- --------------------------------------------------------

--
-- Structure de la table `commandecli`
--

DROP TABLE IF EXISTS `commandecli`;
CREATE TABLE IF NOT EXISTS `commandecli` (
  `numComCli` varchar(11) NOT NULL,
  `codeCli` varchar(11) NOT NULL,
  `dateComCli` date DEFAULT NULL,
  PRIMARY KEY (`numComCli`),
  KEY `FK_RELATION_3` (`codeCli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commandecli`
--

INSERT INTO `commandecli` (`numComCli`, `codeCli`, `dateComCli`) VALUES
('2', 'CL02', '2018-10-26');

-- --------------------------------------------------------

--
-- Structure de la table `commandefrs`
--

DROP TABLE IF EXISTS `commandefrs`;
CREATE TABLE IF NOT EXISTS `commandefrs` (
  `numComFrs` varchar(11) NOT NULL,
  `codeFrs` varchar(11) NOT NULL,
  `dateComFrs` date DEFAULT NULL,
  PRIMARY KEY (`numComFrs`),
  KEY `FK_RELATION_4` (`codeFrs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commandefrs`
--

INSERT INTO `commandefrs` (`numComFrs`, `codeFrs`, `dateComFrs`) VALUES
('2', 'FRS09', '2018-10-26');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `codeFrs` varchar(11) NOT NULL,
  `nomFrs` char(55) DEFAULT NULL,
  `adresseFrs` char(55) DEFAULT NULL,
  PRIMARY KEY (`codeFrs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`codeFrs`, `nomFrs`, `adresseFrs`) VALUES
('FRS09', 'martin', 'imandry');

-- --------------------------------------------------------

--
-- Structure de la table `lignecomcli`
--

DROP TABLE IF EXISTS `lignecomcli`;
CREATE TABLE IF NOT EXISTS `lignecomcli` (
  `numComCli` varchar(11) NOT NULL,
  `codePro` varchar(11) NOT NULL,
  `QteCom` int(11) NOT NULL,
  PRIMARY KEY (`numComCli`,`codePro`),
  KEY `FK_LIGNECOMCLI` (`codePro`),
  KEY `FK_LIGNECOMCLI2` (`numComCli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lignecomcli`
--

INSERT INTO `lignecomcli` (`numComCli`, `codePro`, `QteCom`) VALUES
('2', 'PRO1', 3);

-- --------------------------------------------------------

--
-- Structure de la table `lignecomfrs`
--

DROP TABLE IF EXISTS `lignecomfrs`;
CREATE TABLE IF NOT EXISTS `lignecomfrs` (
  `numComFrs` varchar(11) NOT NULL,
  `codePro` varchar(11) NOT NULL,
  `QteAppro` int(11) NOT NULL,
  PRIMARY KEY (`numComFrs`,`codePro`),
  KEY `FK_LIGNECOMFRS` (`codePro`),
  KEY `FK_LIGNECOMFRS2` (`numComFrs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lignecomfrs`
--

INSERT INTO `lignecomfrs` (`numComFrs`, `codePro`, `QteAppro`) VALUES
('2', 'PRO1', 15);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `codePro` varchar(11) NOT NULL,
  `design` varchar(50) DEFAULT NULL,
  `pu` double DEFAULT NULL,
  `stock` float DEFAULT NULL,
  PRIMARY KEY (`codePro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`codePro`, `design`, `pu`, `stock`) VALUES
('PRO1', 'arachide', 1000, 62),
('PRO2', 'riz', 5000, 50),
('PRO3', 'maÃ¯s', 3000, 20),
('PRO4', 'petit poid', 2000, 40),
('PRO5', 'Tsaramaso', 1000, 4),
('PRO8', 'haricot', 1000, 25);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandecli`
--
ALTER TABLE `commandecli`
  ADD CONSTRAINT `FK_RELATION_3` FOREIGN KEY (`codeCli`) REFERENCES `client` (`codeCli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commandefrs`
--
ALTER TABLE `commandefrs`
  ADD CONSTRAINT `FK_RELATION_4` FOREIGN KEY (`codeFrs`) REFERENCES `fournisseur` (`codeFrs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `lignecomcli`
--
ALTER TABLE `lignecomcli`
  ADD CONSTRAINT `FK_LIGNECOMCLI` FOREIGN KEY (`codePro`) REFERENCES `produit` (`codePro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_LIGNECOMCLI2` FOREIGN KEY (`numComCli`) REFERENCES `commandecli` (`numComCli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `lignecomfrs`
--
ALTER TABLE `lignecomfrs`
  ADD CONSTRAINT `FK_LIGNECOMFRS` FOREIGN KEY (`codePro`) REFERENCES `produit` (`codePro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_LIGNECOMFRS2` FOREIGN KEY (`numComFrs`) REFERENCES `commandefrs` (`numComFrs`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
