drop database if exists sisgev;
create database if not exists sisgev;
use sisgev;

CREATE TABLE `usuario` (
  `id_usuario` int(10) auto_increment,
  `nome_completo` varchar(100) not null,
  `senha` varbinary(50) not null,
  `email` varbinary(100) not null,
  `cpf` int(10),
  primary key (`id_usuario`)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `permissao`(
  `id_evento` int(10)  not null,
  `id_usuario` int(10) not null,
  `tipo_permissao` int(10) not null,
  primary key (`id_evento`, `id_usuario`)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `evento`(
  `id_evento` int(10) auto_increment,
  `nome` varchar(50) not null,
  `data_ini` datetime not null,
  `data_fim` datetime not null,
  `sobre` text,
  `programacao` text,
  `contatos` text,
  `banner` text,
  `logo` text,
  `url` text,
  primary key (`id_evento`)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

create table `controle_acesso`(
  `id_evento` int(10),
  `id_inscrito` int(10),
  `chekin` datetime,
  `chekout` datetime,
primary key (`id_evento`, `id_inscrito`)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

create table `inscrito`(
   `id_inscrito` int(10) auto_increment,
   `nome_inscrito` varchar(50) not null,
   `email_inscrito` varchar(50) not null,
   `cpf_inscrito` int(11) not null,
   `instituicao_inscrito` varchar(50),
   `id_evento` int(10) not null,
   `status` varchar(50) default 'inscrito',
   primary key (`id_inscrito`)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

create table `certificado`(
   `id_certificado` varchar(20) auto_increment,
   `id_evento` int(10) not null,
   `id_inscrito` int(10) not null,
   primary key (`id_certificado`)
)CHARACTER SET utf8 COLLATE utf8_general_ci;