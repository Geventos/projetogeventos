drop database if exists sisgev;
create database if not exists sisgev;
use sisgev;

CREATE TABLE `usuario` (
  `id_usuario` int(10) auto_increment,
  `nome_completo` varchar(50) not null,
  `senha` varchar(20) not null,
  `email` varchar(25) not null,
  `permissao` int(10) default 0,
  primary key (`id_usuario`)
) ;

CREATE TABLE `permissao`(
  `id_evento` int(10)  not null,
  `id_usuario` int(10) not null,
  `tipo_permissao` int(10) not null
);

CREATE TABLE `evento`(
  `id_evento` int(10) auto_increment,
  `nome` varchar(50) not null,
  `data_ini` date not null,
  `data_fim` date not null,
  `sobre` text,
  `programacao` text,
  `contatos` varchar(100),
  primary key (`id_evento`)
);

create table `inscrito`(
   `id_participante` int(10) auto_increment,
   `nome_participante` varchar(50) not null,
   `cpf` int(11) not null,
   `instituicao` varchar(50),
   `id_evento` int(10) not null,
	primary key (`id_participante`)
);


