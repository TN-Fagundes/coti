/*Liguagem SQL*/

/*criando uma base de dados*/
CREATE DATABASE projetophp;

/*conectando à uma base já criada*/
USE projetophp;

CREATE TABLE usuario(
    cod INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    login VARCHAR(20) UNIQUE NOT NULL,
    senha CHAR(32) NOT NULL,
    perfil ENUM('adm','user') NOT NULL
);

