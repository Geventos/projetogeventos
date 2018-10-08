drop database if exists sisgev;
create database if not exists sisgev;
use sisgev;

CREATE TABLE `usuario` (
  `id_usuario` int(10) auto_increment NOT NULL,
  `nome_completo` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `permissao` int(10) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ;

CREATE TABLE `permissao`(
`id_evento` int(10) NOT NULL,
`id_usuario` int(10) NOT NULL,
`tipo_permissao` int(10) NOT NULL
);

CREATE TABLE `evento`(
id_evento int(10) auto_increment not null,
nome varchar(50) not null,
data_ini date not null,
data_fim date not null,
sobre text,
programacao text,
contatos varchar(100)
);

create table `inscrito`(
id_participante int(10) auto_increment not null,
nome_participante varchar(50) not null,
cpf int(11) not null,
instituicao varchar(50),
id_evento int(10) not null
);


