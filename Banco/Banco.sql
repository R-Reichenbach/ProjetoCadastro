-- ARQUIVO DE CRIAÇÃO DO BANCO

DROP database projeto1 if EXISTS;
CREATE database projeto1;

USE projeto1;

CREATE TABLE usuario 
(
	id_usuario int(4) PRIMARY KEY auto_increment,
    nome_usuario varchar(50) NOT NULL,
    email_usuario varchar(50) NOT NULL,
    fone_usuario varchar(30) NULL,
    senha_usuario varchar(30) NOT NULL
    );


