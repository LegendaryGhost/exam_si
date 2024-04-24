Drop database examen1;
create database examen1;
use examen1;

CREATE TABLE IF NOT EXISTS Client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255) NOT NULL,
    Login VARCHAR(255) NOT NULL,
    mdp VARCHAR(255) 
);

CREATE TABLE IF NOT EXISTS Simulation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_simulation VARCHAR(255) NOT NULL,
    idClient INT,
    montant_pret DECIMAL(10, 2) NOT NULL,
    teg DECIMAL(5, 2) NOT NULL,
    duree_amortissement INT NOT NULL,
    date_debut DATE NOT NULL,
    FOREIGN KEY (idClient) REFERENCES Client(id)
);
