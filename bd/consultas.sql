#Buscar usuario
select * from usuario where nome_completo like '%c%';

#Buscar evento
select * from evento where nome like '%v%';

#Buscar incrito
select * from inscrito where nome_participante like '%t%';

#Permissão
select * from permissao;

#Atualizar 
#Puxar o evento
select * from evento where id_evento = "paramentro" limit 1;

#Atualizar no banco
update evento set nome = '$nome', data_ini = '$data_ini', data_fim = '$data_fim', sobre = '$sobre', programacao = '$programacao', contatos = '$contatos'
WHERE id_evento = '$id_evento'