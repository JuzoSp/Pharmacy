-- Table Fournisseurs
CREATE TABLE Fournisseurs (
    id_fournisseur INT PRIMARY KEY,
    nom VARCHAR(100),
    adresse VARCHAR(255),
    telephone VARCHAR(20),
    email VARCHAR(100)
);

-- Table Produits pharmaceutiques
CREATE TABLE Produits_pharmaceutiques (
    id_produit INT PRIMARY KEY,
    nom VARCHAR(100),
    description TEXT,
    code_produit VARCHAR(50),
    prix DECIMAL(10, 2),
    id_fournisseur INT,
    categorie_thérapeutique VARCHAR(100),
    date_expiration DATE,
    quantite_stock INT,
    lieu_stockage VARCHAR(100),
    FOREIGN KEY (id_fournisseur) REFERENCES Fournisseurs (id_fournisseur)
);

-- Table Stock
CREATE TABLE Stock (
    id_stock INT PRIMARY KEY,
    id_produit INT,
    quantite_stock INT,
    date_entree_stock DATE,
    date_expiration DATE,
    FOREIGN KEY (id_produit) REFERENCES Produits_pharmaceutiques (id_produit)
);

-- Table Commandes
CREATE TABLE Commandes (
    id_commande INT PRIMARY KEY,
    id_fournisseur INT,
    date_commande DATE,
    date_livraison_prevue DATE,
    statut_commande VARCHAR(50),
    FOREIGN KEY (id_fournisseur) REFERENCES Fournisseurs (id_fournisseur)
);

-- Table Commande_Produit
CREATE TABLE Commande_Produit (
    id_commande INT,
    id_produit INT,
    quantite_commandee INT,
    prix_unitaire DECIMAL(10, 2),
    PRIMARY KEY (id_commande, id_produit),
    FOREIGN KEY (id_commande) REFERENCES Commandes (id_commande),
    FOREIGN KEY (id_produit) REFERENCES Produits_pharmaceutiques (id_produit)
);

-- Table Clients
CREATE TABLE Clients (
    id_client INT PRIMARY KEY,
    nom VARCHAR(100),
    adresse VARCHAR(255),
    telephone VARCHAR(20),
    email VARCHAR(100)
);

-- Table Ventes
CREATE TABLE Ventes (
    id_vente INT PRIMARY KEY,
    id_client INT,
    date_vente DATE,
    montant_total DECIMAL(10, 2),
    mode_paiement VARCHAR(50),
    FOREIGN KEY (id_client) REFERENCES Clients (id_client)
);

-- Table Vente_Produit
CREATE TABLE Vente_Produit (
    id_vente INT,
    id_produit INT,
    quantite_vendue INT,
    PRIMARY KEY (id_vente, id_produit),
    FOREIGN KEY (id_vente) REFERENCES Ventes (id_vente),
    FOREIGN KEY (id_produit) REFERENCES Produits_pharmaceutiques (id_produit)
);

-- Table Prescriptions
CREATE TABLE Prescriptions (
    id_prescription INT PRIMARY KEY,
    id_client INT,
    medecin_prescripteur VARCHAR(100),
    date_prescription DATE,
    date_validite DATE,
    FOREIGN KEY (id_client) REFERENCES Clients (id_client)
);

-- Table Prescription_Produit
CREATE TABLE Prescription_Produit (
    id_prescription INT,
    id_produit INT,
    posologie VARCHAR(255),
    PRIMARY KEY (id_prescription, id_produit),
    FOREIGN KEY (id_prescription) REFERENCES Prescriptions (id_prescription),
    FOREIGN KEY (id_produit) REFERENCES Produits_pharmaceutiques (id_produit)
);

-- Table Personnel
CREATE TABLE Personnel (
    id_personnel INT PRIMARY KEY,
    nom VARCHAR(100),
    poste VARCHAR(100),
    adresse VARCHAR(255),
    telephone VARCHAR(20),
    email VARCHAR(100),
    horaires_travail VARCHAR(255),
    salaire DECIMAL(10, 2)
);

-- Table Transactions_financieres
CREATE TABLE Transactions_financieres (
    id_transaction INT PRIMARY KEY,
    type_transaction VARCHAR(100),
    montant DECIMAL(10, 2),
    date_transaction DATE,
    description TEXT,
    methode_paiement VARCHAR(100)
);

-- Table Transaction_Vente
CREATE TABLE Transaction_Vente (
    id_transaction INT,
    id_vente INT,
    PRIMARY KEY (id_transaction, id_vente),
    FOREIGN KEY (id_transaction) REFERENCES Transactions_financieres (id_transaction),
    FOREIGN KEY (id_vente) REFERENCES Ventes (id_vente)
);
