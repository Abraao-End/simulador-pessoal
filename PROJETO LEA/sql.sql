create database cadastro;
use cadastro;

create table usuario(
	id int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha int not null);