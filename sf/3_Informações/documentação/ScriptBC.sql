

CREATE DATABASE BANCOSF
----------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------

 CREATE TABLE FUNCIONARIO(
                  CPF VARCHAR(14) NOT NULL,	
                  NOME VARCHAR(50) NOT NULL,
                  SEXO VARCHAR(10) NOT NULL,
                  DATANASc VARCHAR(10) NOT NULL,
                  EMAIL VARCHAR(50) NOT NULL,
                  TELEFONE VARCHAR(10) NOT NULL,
                  ENDERECO VARCHAR(50) NOT NULL,
	          CARGO VARCHAR(20) NOT NULL,
	          SALARIO VARCHAR(10) NOT NULL,
	          SENHA VARCHAR (6) NOT NULL,
	          DESCRICAO VARCHAR (50) NOT NULL,
 PRIMARY KEY (CPF));


CREATE TABLE PRODUTO(
                 CODIGOP VARCHAR(20) NOT NULL,
                 PRECO DOUBLE NOT NULL,
                 NOME VARCHAR(50) NOT NULL,
                 TIPO VARCHAR(50) NOT NULL,
	         ESTOQUE VARCHAR(50) NOT NULL,
	         DATADEVAL VARCHAR(50) NOT NULL,
	         FABRICANTE VARCHAR(100) NOT NULL,	
                 DESCRICAO VARCHAR(100) NOT NULL,
PRIMARY KEY (CODIGOP));


CREATE TABLE VENDAS(
                 CODIGOVEND VARCHAR(20) NOT NULL,
		 DATAP VARCHAR (20) NOT NULL,
		 HORA VARCHAR (20) NOT NULL,
PRIMARY KEY (CODIGOVEND));

CREATE TABLE ITEM(
                CODIGOVEND VARCHAR (20) NOT NULL,
		CODIGOP VARCHAR (20) NOT NULL,
		QUANTIDADE VARCHAR (20) NOT NULL,
		PRIMARY KEY (CODIGOVEND),
		FOREIGN KEY (CODIGOP) REFERENCES PRODUTO(CODIGOP),
		FOREIGN KEY (CODIGOVEND) REFERENCES VENDAS (CODIGOVEND));
		