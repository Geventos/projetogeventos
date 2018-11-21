drop database if exists sisgev;
create database if not exists sisgev;
use sisgev;

CREATE TABLE `usuario` (
  `id_usuario` int(10) auto_increment,
  `nome_completo` varchar(100) not null,
  `senha` varchar(20) not null,
  `email` varchar(50) not null,
  `permissao` int(10) default 0,
  primary key (`id_usuario`)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `permissao`(
  `id_evento` int(10)  not null,
  `id_usuario` int(10) not null,
  `tipo_permissao` int(10) not null
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `evento`(
  `id_evento` int(10) auto_increment,
  `nome` varchar(50) not null,
  `data_ini` date not null,
  `data_fim` date default null,
  `sobre` text,
  `programacao` text,
  `contatos` varchar(100),
  primary key (`id_evento`)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

create table `inscricao`(
   `id_participante` int(10) auto_increment,
   `nome_participante` varchar(50) not null,
   `cpf` int(11) not null,
   `instituicao` varchar(50),
   `id_evento` int(10) not null,
   `status` varchar(50) default 'inscrito',
   `datahora` datetime,
	primary key (`id_participante`)
)CHARACTER SET utf8 COLLATE utf8_general_ci;


