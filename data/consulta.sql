CREATE TABLE consulta(
        id int NOT NULL PRIMARY KEY,
        tipo varchar(50),
        descricao varchar(500),
        data_cadastro DATETIME NOT NULL    
);