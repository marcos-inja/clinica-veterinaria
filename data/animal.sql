CREATE DATABASE veterinaria;
USE veterinaria;
CREATE TABLE animal(
        id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        img varchar(1000),
        name varchar(200),
        idade int,
        especie varchar(50),
        raca varchar(100),
        descricao varchar(500),
        data_cadastro DATETIME NOT NULL    
);