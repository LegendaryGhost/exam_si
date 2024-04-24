CREATE DATABASE simulation_pret;

USE simulation_pret;

CREATE TABLE utilisateur (
   id INT(10) NOT NULL AUTO_INCREMENT,
   nom VARCHAR(50) NULL DEFAULT '',
   email VARCHAR(100) NULL DEFAULT NULL,
   mot_de_passe VARCHAR(100) NULL DEFAULT NULL,
   PRIMARY KEY (id)
);

INSERT INTO utilisateur(nom, email, mot_de_passe) VALUES
    ('Tiarintsoa', 'tiarintsoa@gmail.com', 'tiarintsoa'),
    ('Admin', 'admin@gmail.com', 'admin');