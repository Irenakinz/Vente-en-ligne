-- --------------------------------------------------------
-- Base de données : quincaillerie_db (adaptée)
-- --------------------------------------------------------

DROP DATABASE IF EXISTS quincaillerie_db;
CREATE DATABASE quincaillerie_db;
USE quincaillerie_db;

-- --------------------------------------------------------
-- Table admin
-- --------------------------------------------------------
DROP TABLE IF EXISTS admin;
CREATE TABLE admin (
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50),
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    photo VARCHAR(255),
    genre VARCHAR(10),
    statut TINYINT(1) DEFAULT 1,
    date_save TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table categorie
-- --------------------------------------------------------
DROP TABLE IF EXISTS categorie;
CREATE TABLE categorie (
    id INT NOT NULL AUTO_INCREMENT,
    description VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table clients
-- --------------------------------------------------------
DROP TABLE IF EXISTS clients;
CREATE TABLE clients (
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50),
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    photo VARCHAR(255),
    genre VARCHAR(10),
    adresse VARCHAR(255),
    statut TINYINT(1) DEFAULT 1,
    date_save TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table produits
-- --------------------------------------------------------
DROP TABLE IF EXISTS produits;
CREATE TABLE produits (
    id INT NOT NULL AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL,
    description TEXT,
    categorie_id INT,
    quantite INT NOT NULL,
    prix_unitaire DECIMAL(10,2) NOT NULL,
    image VARCHAR(255),
    statut TINYINT(1) DEFAULT 1,
    PRIMARY KEY (id),
    KEY categorie_id (categorie_id),
    FOREIGN KEY (categorie_id) REFERENCES categorie(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table commande
-- --------------------------------------------------------
DROP TABLE IF EXISTS commande;
CREATE TABLE commande (
    id INT NOT NULL AUTO_INCREMENT,
    produit_id INT NOT NULL,
    client_id INT NOT NULL,
    type_commande ENUM('livraison','retrait') NOT NULL,
    quantite INT NOT NULL,
    prix_unitaire DECIMAL(10,2) NOT NULL,
    date_commande DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_livraison DATETIME DEFAULT NULL,
    is_commande_paid TINYINT(1) DEFAULT 0,
    etat TINYINT(1) DEFAULT 0,
    PRIMARY KEY (id),
    KEY produit_id (produit_id),
    KEY client_id (client_id),
    FOREIGN KEY (produit_id) REFERENCES produits(id) ON DELETE CASCADE,
    FOREIGN KEY (client_id) REFERENCES clients(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table panier
-- --------------------------------------------------------
DROP TABLE IF EXISTS panier;
CREATE TABLE panier (
    id INT NOT NULL AUTO_INCREMENT,
    client_id INT NOT NULL,
    produit_id INT NOT NULL,
    quantite INT NOT NULL,
    prix_unitaire DECIMAL(10,2) NOT NULL,
    date_ajout DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_maj DATETIME DEFAULT NULL,
    PRIMARY KEY (id),
    KEY client_id (client_id),
    KEY produit_id (produit_id),
    FOREIGN KEY (client_id) REFERENCES clients(id) ON DELETE CASCADE,
    FOREIGN KEY (produit_id) REFERENCES produits(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table logs
-- --------------------------------------------------------
DROP TABLE IF EXISTS logs;
CREATE TABLE logs (
    id INT NOT NULL AUTO_INCREMENT,
    user_email VARCHAR(100) NOT NULL,
    date_connexion DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_deconnexion DATETIME DEFAULT NULL,
    status TINYINT(1) DEFAULT 1,
    adresse_ip VARCHAR(45),
    navigateur VARCHAR(255),
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;
