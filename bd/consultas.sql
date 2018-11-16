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

select * from inscricao where status = 'presente' and id_evento = 1 order by time(datahora) DESC;

select now()
