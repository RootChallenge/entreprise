CREATE TABLE users(
	users_id INT(11) NOT NULL auto_increment,
	users_username VARCHAR(255) NOT NULL,
	users_password VARCHAR(255) NOT NULL,
	users_nom VARCHAR(255) NOT NULL,
	users_prenom VARCHAR(255) NOT NULL,
	users_email VARCHAR(255) NOT NULL,
	create_at TIMESTAMP default CURRENT_TIMESTAMP,
	PRIMARY KEY(users_id)
);

CREATE TABLE users_group(
	users_group_id INT(11) NOT NULL auto_increment,
	users_id INT(11) NOT NULL,
	group_id INT(11) NOT NULL,
	PRIMARY KEY(users_group_id)	
);

CREATE TABLE employe(
	employe_id INT(11) NOT NULL auto_increment,
	employe_nom VARCHAR(255) NOT NULL,
	employe_prenom VARCHAR(255) NOT NULL,
	employe_adresse VARCHAR(255) NOT NULL,
	employe_tel VARCHAR(15) NOT NULL,
	employe_email VARCHAR(255) NOT NULL,
	employe_poste VARCHAR(255) NOT NULL,
	PRIMARY KEY(employe_id)
);

CREATE TABLE rapport(
	rapport_id INT(11) NOT NULL auto_increment,
	rapport_titre VARCHAR(255) NOT NULL,
	rapport_commentaire TEXT,
	rapport_fichier VARCHAR(255) NOT NULL,
	PRIMARY KEY(rapport_id)
);

CREATE TABLE produit(
	produit_id INT(11) NOT NULL auto_increment,
	produit_nom VARCHAR(255) NOT NULL,
	produit_prix VARCHAR(255) NOT NULL,
	create_at TIMESTAMP default CURRENT_TIMESTAMP,
	categorie_produit_id INT(11) NOT NULL,
	PRIMARY KEY(produit_id)
);

CREATE TABLE categorie_produit(
	categorie_produit_id INT(11) NOT NULL auto_increment,
	categorie_produit_nom VARCHAR(255) NOT NULL,
	PRIMARY KEY(categorie_produit_id)
);

CREATE TABLE stagiaire(
	stagiaire_id INT(11) NOT NULL auto_increment,
	stagiaire_nom VARCHAR(255) NOT NULL,
	stagiaire_prenom VARCHAR(255) NOT NULL,
	stagiaire_tel VARCHAR(15) NOT NULL,
	stagiaire_email VARCHAR(255) NOT NULL,
	stagiaire_adresse VARCHAR(255) NOT NULL,
	PRIMARY KEY(stagiaire_id)
);