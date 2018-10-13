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

#2 povoamento Usuarios Permissão 1-mebro da organização(ler QR) 2-Organizador 3-Root
insert into usuario(nome_completo, senha, email, permissao)
values('Arthur Santos', '123','at@at.com.br', 3);

insert into usuario(nome_completo, senha, email, permissao)
values('claudio medeiros', '12','cm@cm.com.br', 3);

insert into usuario(nome_completo, senha, email, permissao)
values('sebatiao medeiros', '123456','sm@sm.com.br', 3);

insert into usuario(nome_completo, senha, email, permissao)
values('Eduarda cavalcante', '1234567','ec@ec.com.br', 3);

insert into usuario(nome_completo, senha, email, permissao)
values('Luiz lucena', '129','ll@ll.com.br', 3);

#3 povoamento Usuarios Permissão 1-mebro da organização(ler QR) 2-Organizador 3-Root
insert into usuario(nome_completo, senha, email, permissao)
values('Denia Morais', '123','dm@dm.com.br', 2);

insert into usuario(nome_completo, senha, email, permissao)
values('Sophia maria', '12','sm@sm.com.br', 2);

insert into usuario(nome_completo, senha, email, permissao)
values('Carlos Albuquerque', '1236','ca@ca.com.br', 2);

insert into usuario(nome_completo, senha, email, permissao)
values('Andressa Soares', '2222','as@as.com.br', 2);

insert into usuario(nome_completo, senha, email, permissao)
values('Fernando Garcia', '1313','fg@fg.com.br', 2);

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

#2 Permissões - Permissão 1-mebro da organização(ler QR) 2-Organizador 3-Root
insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 6, 3);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 7, 3);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 8, 3);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 9, 3);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 10, 3);

#3 Permissões - Permissão 1-mebro da organização(ler QR) 2-Organizador 3-Root
insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 11, 2);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 12, 2);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 13, 2);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 14, 2);

insert into permissao(id_evento, id_usuario, tipo_permissao)
values(1, 15, 2);


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

#Eventos
insert into evento(nome, data_ini, data_fim)
values('Encontro Integrado de Ensino da UFRN', '2018-09-19', '2018-09-22');

insert into evento(nome, data_ini, data_fim)
values('CONGRESSO DE TECNOLOGIAS AGROPECUÁRIAS', '2018-10-10', '2018-10-12');

insert into evento(nome, data_ini, data_fim)
values('SEMINÁRIO FRANCO-BRASILEIRO DA UFRN', '2018-10-08', '2018-10-13');

insert into evento(nome, data_ini, data_fim)
values('II ENCONTRO DE PRÁTICAS EDUCACIONAIS DO CENTRO DE EDUCAÇÃO', '2018-10-19', '2018-10-23');

insert into evento(nome, data_ini, data_fim)
values('PYTHON BRASIL NATAL 2018', '2018-10-17', '2018-10-21');


#Eventos
insert into evento(nome, data_ini, data_fim)
values('CONGRESSO BRASILEIRO DE NEUROPSIQUIATRIA', '2018-11-16', '2018-11-22');

insert into evento(nome, data_ini, data_fim)
values('ENCONTRO DE EDUCAÇÃO A DISTÂNCIA', '2018-12-05', '2018-12-19');

insert into evento(nome, data_ini, data_fim)
values('SEMINÁRIO FRANCO-BRASILEIRO DA UFRN', '2018-10-08', '2018-10-13');

insert into evento(nome, data_ini, data_fim)
values('III SEMINARIO ESPIRITA DA COMUNIDADE DO SERIDÓ', '2018-10-23', '2018-10-27');

insert into evento(nome, data_ini, data_fim)
values('ENCONTRO DE ESTUDANTES DE LÍNGUA GREGA DA UFRN', '2018-11-09', '2018-11-12');
