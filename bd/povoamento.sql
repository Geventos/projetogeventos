use sisgev;

#Usuarios Permissão 1-mebro da organização(ler QR) 2-Organizador 3-Root
insert into usuario(nome_completo, senha, email, permissao)
values('Cristovão Lima', '123','cl@cl.com.br', 3);

insert into usuario(nome_completo, senha, email, permissao)
values('Daniel Sena', '12345','dl@dl.com.br', 3);

insert into usuario(nome_completo, senha, email, permissao)
values('Aliete Silva', '123456','as@as.com.br', 3);

insert into usuario(nome_completo, senha, email, permissao)
values('Alexandre Araujo', '1234567','aa@aa.com.br', 3);

insert into usuario(nome_completo, senha, email, permissao)
values('Soraya Roberta', '12345678','sr@sr.com.br', 3);

#Permissões - Permissão 1-mebro da organização(ler QR) 2-Organizador 3-Root
insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 1, 3);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 2, 3);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 3, 3);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 4, 3);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 5, 3);

#Eventos
insert into evento(nome, data_ini, data_fim)
values('SEMINÁRIO DA PÓS-GRADUAÇÃO EM ENGENHARIA MECÂNICA', '2018-10-10', '2018-10-10');

insert into evento(nome, data_ini, data_fim)
values('1º. Simpósio Interno do PROFQUI/UFRN', '2018-11-11', '2018-11-12');

insert into evento(nome, data_ini, data_fim)
values('V SEMANA DE ENGENHARIA TÊXTIL', '2018-09-08', '2018-09-12');

insert into evento(nome, data_ini, data_fim)
values('I SIMPÓSIO DE FISIOTERAPIA DA FACISA', '2018-10-19', '2018-10-20');

insert into evento(nome, data_ini, data_fim)
values('V SEMANA DE MATEMÁTICA DO CERES/Caicó', '2018-10-24', '2018-10-26');

