 CREATE DATABASE IF NOT EXISTS Costumeo
	DEFAULT CHARSET utf8mb4;

CREATE TABLE IF NOT EXISTS Costumeo.Utilisateurs (
	ID SMALLINT  NOT NULL AUTO_INCREMENT,
	Nom VARCHAR(15),
	Prenom VARCHAR(15),
	genre VARCHAR(50),
	adresse_email VARCHAR(50),
	Date_de_naissance DATE,
	mot_de_passe VARCHAR(50),
	Code_postale INT(5),
	ville VARCHAR(50),
	role ENUM ('utilisateur', 'administrateur') NOT NULL DEFAULT 'utilisateur',
	pays VARCHAR(50),
	PRIMARY KEY (ID)
);

INSERT INTO Costumeo.Utilisateurs (Nom, Prenom, genre, adresse_email, Date_de_naissance, mot_de_passe, Code_postale, ville, role, pays)
VALUES
 	("Borg", "Joy", "Femme", "test@etna.com", "1999-9-9", MD5("Costumeoadmin"), "94200", "Ivry-sur-Seine", "administrateur", "France");
CREATE TABLE IF NOT EXISTS Costumeo.annonce (
	ID SMALLINT  NOT NULL AUTO_INCREMENT,
	Nom VARCHAR(20),
	Prenom VARCHAR(20),
	Libelle VARCHAR(20),
	Description VARCHAR(1000),
	Prix_vente FLOAT,
	Nombres_produit INT,
	verif SMALLINT,
	image VARCHAR(20) NOT NULL,
	ID_utilisateur SMALLINT  NOT NULL,
	type ENUM ('Costume', 'Decor', 'Accessoire') NOT NULL DEFAULT 'Costume',
	PRIMARY KEY (ID)
);