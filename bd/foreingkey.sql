alter table permissao add foreign key (`id_evento`) references evento(id_evento) on delete restrict;
alter table permissao add foreign key (`id_usuario`) references usuario(id_usuario) on delete restrict;
alter table permissao add foreign key (`tipo_permissao`) references usuario(permissao) on delete restrict;

alter table inscrito add foreign key (`id_evento`) references evento(id_evento) on delete restrict;