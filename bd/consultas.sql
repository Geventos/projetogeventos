#Buscar usuario
select * from usuario where nome_completo like '%c%';

#Buscar evento
select * from evento where nome like '%v%';

#Buscar incrito
select * from inscrito where nome_participante like '%t%';

#Permissão
select * from evento;

select * from usuario;

select * from inscricao;

update inscricao set status = 'presente' where id_participante = 1 and id_evento = 1;


