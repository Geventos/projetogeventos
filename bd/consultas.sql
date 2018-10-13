#Buscar usuario
select * from usuario where nome_completo like '%c%';

#Buscar evento
select * from evento where nome like '%v%';

#Buscar incrito
select * from inscrito where nome_participante like '%t%';

#Permissão
select * from evento;
