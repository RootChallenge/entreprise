-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 12 Avril 2017 à 12:19
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `entreprise`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie_conge`
--

CREATE TABLE IF NOT EXISTS `categorie_conge` (
  `categorie_conge_id` int(11) NOT NULL,
  `categorie_conge_nom` varchar(255) NOT NULL,
  `categorie_conge_duree` varchar(255) NOT NULL,
  PRIMARY KEY (`categorie_conge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_produit`
--

CREATE TABLE IF NOT EXISTS `categorie_produit` (
  `categorie_produit_id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_produit_nom` varchar(255) NOT NULL,
  PRIMARY KEY (`categorie_produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

CREATE TABLE IF NOT EXISTS `conge` (
  `conge_id` int(11) NOT NULL AUTO_INCREMENT,
  `conge_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `categorie_conge_id` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  PRIMARY KEY (`conge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `employe_id` int(11) NOT NULL AUTO_INCREMENT,
  `employe_nom` varchar(255) NOT NULL,
  `employe_prenom` varchar(255) NOT NULL,
  `employe_adresse` varchar(255) NOT NULL,
  `employe_tel` varchar(15) NOT NULL,
  `employe_email` varchar(255) NOT NULL,
  `employe_poste` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`employe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `employe`
--

INSERT INTO `employe` (`employe_id`, `employe_nom`, `employe_prenom`, `employe_adresse`, `employe_tel`, `employe_email`, `employe_poste`, `create_at`) VALUES
(1, 'KPONTON', 'Auguste', 'Lakouanga', '72683230', 'kpontonauguste@gmail.com', 'Développeur web', '2017-04-05 10:28:41');

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement`
--

CREATE TABLE IF NOT EXISTS `enregistrement` (
  `enregistrement_id` int(11) NOT NULL AUTO_INCREMENT,
  `enregistrement_etat` int(1) NOT NULL,
  `enregistrement_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `employe_id` int(11) NOT NULL,
  PRIMARY KEY (`enregistrement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE IF NOT EXISTS `paiement` (
  `paiement_id` int(11) NOT NULL AUTO_INCREMENT,
  `paiement_montant` varchar(255) NOT NULL,
  `paiement_motif` varchar(255) NOT NULL,
  `paiement_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `paiement_prime` varchar(255) DEFAULT NULL,
  `employe_id` int(11) NOT NULL,
  PRIMARY KEY (`paiement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `produit_id` int(11) NOT NULL AUTO_INCREMENT,
  `produit_nom` varchar(255) NOT NULL,
  `produit_prix` varchar(255) NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `categorie_produit_id` int(11) NOT NULL,
  PRIMARY KEY (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

CREATE TABLE IF NOT EXISTS `rapport` (
  `rapport_id` int(11) NOT NULL AUTO_INCREMENT,
  `rapport_titre` varchar(255) NOT NULL,
  `rapport_commentaire` text,
  `rapport_fichier` varchar(255) NOT NULL,
  PRIMARY KEY (`rapport_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE IF NOT EXISTS `stagiaire` (
  `stagiaire_id` int(11) NOT NULL AUTO_INCREMENT,
  `stagiaire_nom` varchar(255) NOT NULL,
  `stagiaire_prenom` varchar(255) NOT NULL,
  `stagiaire_tel` varchar(15) NOT NULL,
  `stagiaire_email` varchar(255) NOT NULL,
  `stagiaire_adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`stagiaire_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_username` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_nom` varchar(255) NOT NULL,
  `users_prenom` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users_group`
--

CREATE TABLE IF NOT EXISTS `users_group` (
  `users_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`users_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
