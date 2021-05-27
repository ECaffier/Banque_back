DROP DATABASE IF EXISTS banque_php;
CREATE DATABASE IF NOT EXISTS banque_php 
DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
DROP USER IF EXISTS'banque_php'@'localhost';
CREATE USER 'banquePHP'@'localhost'IDENTIFIED BY'password';
GRANT ALL PRIVILEGES ON banque_php.* TO'banquePHP'@'localhost';
CREATE TABLE banque_php.user
(
    userID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),prenom VARCHAR(100),
    date_naissance DATE,
     email VARCHAR(100),
     pass VARCHAR(100)                 
);
CREATE TABLE banque_php.account
(
    accountID INT UNSIGNED NOT NULL AUTO_INCREMENT,
    date_creation DATE,
    account_type VARCHAR(100),
    solde DECIMAL(10,2),
    userID INT UNSIGNED NOT NULL, PRIMARY KEY(accountID),
    FOREIGN KEY(userID) REFERENCES user(userID));

CREATE TABLE banque_php.operation
(
        operationID INT UNSIGNED NOT NULL AUTO_INCREMENT,
        type_operation DECIMAL(10,2),
        date_operation DATE,
        motif_operation VARCHAR(100),
        accountID INT UNSIGNED NOT NULL,
        PRIMARY KEY(operationID),
        FOREIGN KEY(accountID) REFERENCES account(accountID)
);


USE banque_php;
INSERT INTO`user`VALUES(NULL, 'Dampierre', 'Eric', '1989-05-17', 'EricDampierre@gmail.com', 'passpass1');
INSERT INTO`user`VALUES(NULL, 'Pluie', 'Serge', '1978-02-12', 'SergePluie@gmail.com', 'passpass');
INSERT INTO`account`VALUES(NULL, '2021-05-02', 'Courant', '2024.12', '1');
INSERT INTO`account`VALUES(NULL, '2021-05-02', 'Livret A', '3450.43', '1');
INSERT INTO`operation`VALUES(NULL, '-34.16', '2021-05-23', 'Intermarché', '1');
INSERT INTO`operation`VALUES(NULL, '+30', '2021-05-22', 'Remboursement Michel', '1');