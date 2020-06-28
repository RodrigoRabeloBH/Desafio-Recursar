<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


# Desafio-Tecnico

### /* CRIA O BANCO DE DADOS */

CREATE DATABASE MYDATABASE;

### /* SELECIONA O BANCO */

USE MYDATABASE;

### /* CRIA AS TABELAS*/

CREATE TABLE FUNCIONARIO(
CodFuncionario INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL,
Nome VARCHAR(400) NOT NULL,
DataNascimento DATETIME NOT NULL,
Salario NUMERIC(18,2),
Atividades VARCHAR(8000) NOT NULL,
created_at DATETIME,
updated_at DATETIME
);

CREATE TABLE FUNCIONARIOFILHO(
CodFuncionarioFilho INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
CodFuncionario INT(10) NOT NULL,
Nome VARCHAR(400) NOT NULL,
DataNascimento DATETIME NOT NULL,
created_at DATETIME,
updated_at DATETIME,
FOREIGN KEY(CodFuncionario)
REFERENCES FUNCIONARIO (CodFuncionario)
);

### /* INSERE VALORES PARA TESTE*/

INSERT INTO FUNCIONARIO(Nome,DataNascimento,Salario,Atividades,created_at) VALUES('John Doe','1992-05-18', 3250.85,'Desenvolvedor', SYSDATE());
INSERT INTO FUNCIONARIO(Nome,DataNascimento,Salario,Atividades,created_at) VALUES('Joane Doe','1996-04-22', 4250.90,'Marketing', SYSDATE());
INSERT INTO FUNCIONARIOFILHO(Nome,DataNascimento,created_at,CodFuncionario) VALUES('John Doe Junior','2010-10-21',SYSDATE(),1);
INSERT INTO FUNCIONARIOFILHO(Nome,DataNascimento,created_at,CodFuncionario) VALUES('Joane Doe Filha','2012-08-13', SYSDATE(),2);



