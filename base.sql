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

CREATE TABLE pret (
    id INT AUTO_INCREMENT,
    id_utilisateur INT NOT NULL,
    nom VARCHAR(255) NOT NULL,
    montant DECIMAL(10, 2) NOT NULL,
    teg DECIMAL(10, 2) NOT NULL,
    duree_mois INT NOT NULL,
    date_debut DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id)
);

CREATE TABLE amortissement (
   id INT PRIMARY KEY,
   id_pret INT,
   numero_mensualite INT,
   date_versement DATE,
   solde_initial DECIMAL(10, 2),
   mensualite DECIMAL(10, 2),
   capital_rembourse DECIMAL(10, 2),
   interet DECIMAL(10, 2),
   capital_restant DECIMAL(10, 2),
   FOREIGN KEY (id_pret) REFERENCES pret(id)
);
