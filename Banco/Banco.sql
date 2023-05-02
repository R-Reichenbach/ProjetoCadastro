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

/*
-- inserir dados
INSERT INTO usuario
(nome_usuario, email_usuario, fone_usuario, senha_usuario) 
values ('CASSIO', '(18) 3622-9046', 'cassio@mail.com', '1234');

select * from usuario;
*/
