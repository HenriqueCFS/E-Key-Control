create database Chave;

use Chave;

create table labsala(
codS integer auto_increment,
nome varchar(10),
num integer(2),
PRIMARY KEY(codS));

create table labsala(
codS integer auto_increment,
nome varchar(10),
num integer(2),
PRIMARY KEY(codS));

create table nivel(
codN INTEGER AUTO_INCREMENT,
nome VARCHAR(50),
PRIMARY KEY(codN));

create table disciplina(
codD integer auto_increment,
nome varchar(10),
PRIMARY KEY(codD));

create table Professor(
codP integer auto_increment,
nome varchar(50),
disciplinas_p varchar(10),
PRIMARY KEY(codP));

create table registro(
codR integer auto_increment,
codP integer NOT NULL,
codS integer NOT NULL,
horario_saida DATETIME NOT NULL,
horario_entrada DATETIME NOT NULL,
devolucao boolean,
PRIMARY KEY(codR),
FOREIGN KEY(codP) REFERENCES professor(codP),
FOREIGN KEY(codS) REFERENCES labsala(codS));



create table login(
codL INTEGER AUTO_INCREMENT,
usuario varchar(50),
senha VARCHAR(32),
codN INTEGER,
PRIMARY KEY (codL),
FOREIGN KEY(codN) references nivel(codN));


insert into disciplina(nome)values('d1');
insert into disciplina(nome)values('d2');
insert into disciplina(nome)values('d3');
insert into disciplina(nome)values('d4');
insert into disciplina(nome)values('d5');
insert into disciplina(nome)values('d6');
insert into disciplina(nome)values('d7');
insert into disciplina(nome)values('d8');
insert into disciplina(nome)values('d9');
insert into professor(nome,disciplinas_P)values('Adriana David Fernandes','1');
insert into professor(nome,disciplinas_P)values('Angela Simone Ronqui Oliva','1,2');
insert into professor(nome,disciplinas_P)values('Antonio Rafael Pepece Júnior','1,3');
insert into professor(nome,disciplinas_P)values('Carla Caroline Oliveira dos Santos','4');
insert into professor(nome,disciplinas_P)values('Célia Regina dos Reis','3,5');
insert into professor(nome,disciplinas_P)values('Claudia Patricia Candia Maciel','6');
insert into professor(nome,disciplinas_P)values('Cleison','7,8');
insert into professor(nome,disciplinas_P)values('Daniele Cristina Marim Molero','8');
insert into professor(nome,disciplinas_P)values('Edson Antônio Ramires','9');
insert into registro values(1,1,1,'2016-12-12 09:20:23','2016-12-12 09:22:23',true);
insert into nivel values(1,'randal');
insert into login values(1, 'randal', 'f84278cfa4794b3aa628b99977901f2f',1);