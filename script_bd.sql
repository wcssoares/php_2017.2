/* 
 * Arquivo com a estrutura do banco
 * Author: Willian.Souza
 * Created: 20/03/18
 */
 

/* Comando para CRIAR a base(schema) do banco de dados*/
create database aula06;

# Comando para SELECIONAR a base
use aula06;

/* Comando para CRIAR a tabela no banco de dados*/
create table aluno(
    
    nome varchar(150) not null,
    matricula varchar (50) not null,
    telefone varchar (50) not null,
);

## DMLs

/* Inserir os dados no banco*/
insert(nome, matricula,telefone) into aluno values(null, 'matricula123', 'Willian','(21)3905-5569');



