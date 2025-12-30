-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 28 déc. 2025 à 19:02
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quincaillerie_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `date_save` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL, 
  `date_save` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_produit` int NOT NULL,
  `id_client` int NOT NULL,
  `type_commande` varchar(50) NOT NULL,
  `quantite` int NOT NULL,
  `date_commande` date DEFAULT NULL,
  `date_livraison` date DEFAULT NULL,
  `is_commande_paid` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_produit` (`Id_produit`),
  KEY `Id_client` (`Id_client`)
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) NOT NULL,
  `Date_connexion` datetime DEFAULT NULL,
  `Date_deconnexion` datetime DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Adresse_ip` varchar(50) DEFAULT NULL,
  `Navigateur` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Id_client` int NOT NULL,
  `Id_produit` int NOT NULL,
  `Quantite` int NOT NULL,
  `Prix_unitaire` decimal(10,2) NOT NULL,
  `Date_ajout` date DEFAULT NULL,
  `Date_maj` date DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_client` (`Id_client`),
  KEY `Id_produit` (`Id_produit`)
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) NOT NULL,
  `Description` text,
  `Id_categorie` int DEFAULT NULL,
  `Quantite` int NOT NULL,
  `Prix_unitaire` decimal(10,2) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_categorie` (`Id_categorie`)
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4 ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
