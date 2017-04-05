-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.6.17 - MySQL Community Server (GPL)
-- SE du serveur:                Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la base pour entreprise
DROP DATABASE IF EXISTS `entreprise`;
CREATE DATABASE IF NOT EXISTS `entreprise` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `entreprise`;


-- Export de la structure de table entreprise. categorie_produit
DROP TABLE IF EXISTS `categorie_produit`;
CREATE TABLE IF NOT EXISTS `categorie_produit` (
  `categorie_produit_id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_produit_nom` varchar(255) NOT NULL,
  PRIMARY KEY (`categorie_produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table entreprise.categorie_produit : ~0 rows (environ)
/*!40000 ALTER TABLE `categorie_produit` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie_produit` ENABLE KEYS */;


-- Export de la structure de table entreprise. employe
DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `employe_id` int(11) NOT NULL AUTO_INCREMENT,
  `employe_nom` varchar(255) NOT NULL,
  `employe_prenom` varchar(255) NOT NULL,
  `employe_adresse` varchar(255) NOT NULL,
  `employe_tel` varchar(15) NOT NULL,
  `employe_email` varchar(255) NOT NULL,
  `employe_poste` varchar(255) NOT NULL,
  PRIMARY KEY (`employe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table entreprise.employe : ~0 rows (environ)
/*!40000 ALTER TABLE `employe` DISABLE KEYS */;
/*!40000 ALTER TABLE `employe` ENABLE KEYS */;


-- Export de la structure de table entreprise. group
DROP TABLE IF EXISTS `group`;
CREATE TABLE IF NOT EXISTS `group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `is_system` tinyint(4) NOT NULL DEFAULT '0',
  `user` tinyint(4) NOT NULL DEFAULT '0',
  `group` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Export de données de la table entreprise.group : ~2 rows (environ)
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` (`group_id`, `group_name`, `is_system`, `user`, `group`) VALUES
	(1, 'default', 1, 0, 0),
	(2, 'administrateur', 0, 1, 1);
/*!40000 ALTER TABLE `group` ENABLE KEYS */;


-- Export de la structure de table entreprise. produit
DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `produit_id` int(11) NOT NULL AUTO_INCREMENT,
  `produit_nom` varchar(255) NOT NULL,
  `produit_prix` varchar(255) NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `categorie_produit_id` int(11) NOT NULL,
  PRIMARY KEY (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table entreprise.produit : ~0 rows (environ)
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;


-- Export de la structure de table entreprise. rapport
DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `rapport_id` int(11) NOT NULL AUTO_INCREMENT,
  `rapport_titre` varchar(255) NOT NULL,
  `rapport_commentaire` text,
  `rapport_fichier` varchar(255) NOT NULL,
  PRIMARY KEY (`rapport_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table entreprise.rapport : ~0 rows (environ)
/*!40000 ALTER TABLE `rapport` DISABLE KEYS */;
/*!40000 ALTER TABLE `rapport` ENABLE KEYS */;


-- Export de la structure de table entreprise. stagiaire
DROP TABLE IF EXISTS `stagiaire`;
CREATE TABLE IF NOT EXISTS `stagiaire` (
  `stagiaire_id` int(11) NOT NULL AUTO_INCREMENT,
  `stagiaire_nom` varchar(255) NOT NULL,
  `stagiaire_prenom` varchar(255) NOT NULL,
  `stagiaire_tel` varchar(15) NOT NULL,
  `stagiaire_email` varchar(255) NOT NULL,
  `stagiaire_adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`stagiaire_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table entreprise.stagiaire : ~0 rows (environ)
/*!40000 ALTER TABLE `stagiaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `stagiaire` ENABLE KEYS */;


-- Export de la structure de table entreprise. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_username` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_nom` varchar(255) NOT NULL,
  `users_prenom` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Export de données de la table entreprise.users : ~1 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`users_id`, `users_username`, `users_password`, `users_nom`, `users_prenom`, `users_email`, `create_at`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'NGUEREZA', 'Tony', 'nguerezatony@gmail.com', '2016-11-11 07:54:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Export de la structure de table entreprise. users_group
DROP TABLE IF EXISTS `users_group`;
CREATE TABLE IF NOT EXISTS `users_group` (
  `users_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL DEFAULT '0',
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`users_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Export de données de la table entreprise.users_group : ~1 rows (environ)
/*!40000 ALTER TABLE `users_group` DISABLE KEYS */;
INSERT INTO `users_group` (`users_group_id`, `users_id`, `group_id`) VALUES
	(1, 1, 2);
/*!40000 ALTER TABLE `users_group` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
