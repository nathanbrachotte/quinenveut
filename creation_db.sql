DROP DATABASE IF EXISTS M2TEST7;
CREATE DATABASE M2TEST7;
USE M2TEST7;

CREATE TABLE Roles(
  id_role int(2) NOT NULL,
  nom_role varchar(45) DEFAULT NULL,
  PRIMARY KEY (id_role)
);

CREATE TABLE Users(
  id_user int(11) NOT NULL AUTO_INCREMENT,
  id_role int(2) NOT NULL,
  mail varchar(45) NOT NULL,
  mdp varchar(45) DEFAULT NULL,
  nom varchar(45) DEFAULT NULL,
  prenom varchar(45) DEFAULT NULL,
  statut tinyint(1) DEFAULT NULL, -- utilisateur valide ou non
  adresse varchar(200) DEFAULT NULL,
  PRIMARY KEY (id_user),
  FOREIGN KEY (id_role) REFERENCES Roles(id_role)
  );
  
  
CREATE TABLE Categories(
	id_cat int(11) NOT NULL AUTO_INCREMENT,
	nom_cat varchar(45) DEFAULT NULL,
    PRIMARY KEY (id_cat)
);


CREATE TABLE Visibilite(
  id_visibilite int(2) NOT NULL,
  nom_visibilite varchar(45) DEFAULT NULL,
  PRIMARY KEY (id_visibilite)
);

CREATE TABLE Objets(
  id_objet int(11) NOT NULL AUTO_INCREMENT,
  nom_objet varchar(45) DEFAULT NULL,
  desc_objet varchar(45) DEFAULT NULL,
  prix_base float DEFAULT NULL,
  prix_res float DEFAULT NULL,
  date_limit date DEFAULT NULL,
  heure_limit varchar(45) DEFAULT NULL,
  id_cat int(11) NOT NULL,
  photo BLOB DEFAULT NULL,
  id_vendeur int(11) NOT NULL,
  statut tinyint(1) DEFAULT NULL, -- objey validé ou non
  id_visibilite int(2) DEFAULT NULL,
  PRIMARY KEY (id_objet),
  FOREIGN KEY (id_cat) REFERENCES Categories(id_cat),
  FOREIGN KEY (id_vendeur) REFERENCES Users(id_user),
  FOREIGN KEY (id_visibilite) REFERENCES Visibilite(id_visibilite)
  );
  
CREATE TABLE Encheres(
  id_ench int(11) NOT NULL AUTO_INCREMENT,
  Prix double DEFAULT NULL,
  id_objet int(11) NOT NULL,
  id_acheteur int(11) NOT NULL,
  PRIMARY KEY (id_ench),
  FOREIGN KEY (id_objet) REFERENCES Objets(id_objet),
  FOREIGN KEY (id_acheteur) REFERENCES Users(id_user)
 );
 
CREATE TABLE Invitations(
  id_invit int(11) NOT NULL AUTO_INCREMENT,
  id_objet int(11) NOT NULL,
  id_user int(11) NOT NULL,
  PRIMARY KEY (id_invit),
  FOREIGN KEY (id_objet) REFERENCES Objets(id_objet),
  FOREIGN KEY (id_user) REFERENCES Users(id_user)
);  
 