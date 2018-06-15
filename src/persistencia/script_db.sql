create database db_aulajava10;

use db_aulajava10;

create table produto(
	id int primary key auto_increment,
	nome varchar(150) not null,
    quantidade int not null

);

create table usuario(
	id long primary key auto_increment,
	nome varchar(80) not null,
	telefone varchar(10) not null,
	idade int not null,
	altura float not null,
	sexo varchar(10) not null
);