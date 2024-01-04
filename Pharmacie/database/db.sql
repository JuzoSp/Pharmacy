-- Table Magasin
CREATE TABLE Magasin (
    MagasinID INT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(255),
    Adresse VARCHAR(255),
    Ville VARCHAR(100),
    CodePostal VARCHAR(20),
    -- Autres colonnes pertinentes
);

-- Table Dépôt
CREATE TABLE Depot (
    DepotID INT PRIMARY KEY AUTO_INCREMENT,
    NomDepot VARCHAR(255),
    AdresseDepot VARCHAR(255),
    MagasinID INT,
    FOREIGN KEY (MagasinID) REFERENCES Magasin(MagasinID)
    -- Autres colonnes pertinentes pour le dépôt
);

-- Table Employé
CREATE TABLE Employe (
    EmployeID INT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(100),
    Prenom VARCHAR(100),
    Adresse VARCHAR(255),
    Telephone VARCHAR(20),
    Poste VARCHAR(100),
    MagasinID INT,
    FOREIGN KEY (MagasinID) REFERENCES Magasin(MagasinID)
    -- Autres colonnes pertinentes pour l'employé
);

-- Table Pharmacien (SuperAdmin)
CREATE TABLE Pharmacien (
    PharmacienID INT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(100),
    Prenom VARCHAR(100),
    Email VARCHAR(100),
    MotDePasse VARCHAR(255)
    -- Autres colonnes pertinentes pour le pharmacien
);

-- Table TypeProduit
CREATE TABLE TypeProduit (
    TypeProduitID INT PRIMARY KEY AUTO_INCREMENT,
    NomTypeProduit VARCHAR(100),
    DescriptionTypeProduit TEXT
    -- Autres colonnes pertinentes pour le type de produit
);

-- Table Produit
CREATE TABLE Produit (
    ProduitID INT PRIMARY KEY AUTO_INCREMENT,
    NomProduit VARCHAR(255),
    DescriptionProduit TEXT,
    Prix DECIMAL(10, 2),
    TypeProduitID INT,
    FOREIGN KEY (TypeProduitID) REFERENCES TypeProduit(TypeProduitID)
    -- Autres colonnes pertinentes pour le produit
);

-- Table Stock
CREATE TABLE Stock (
    StockID INT PRIMARY KEY AUTO_INCREMENT,
    Quantite INT,
    DepotID INT,
    ProduitID INT,
    FOREIGN KEY (DepotID) REFERENCES Depot(DepotID),
    FOREIGN KEY (ProduitID) REFERENCES Produit(ProduitID)
    -- Autres colonnes pertinentes pour le stock
);
