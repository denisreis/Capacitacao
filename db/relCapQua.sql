create table Rel_Cap_Qua(
codigo int auto_increment primary key.,
name varchar(32)
surname varchar(32),
career char(1),
occupation char(3),
workload decimal,
institution_name char(42),
type_instituition char(4),
level_of_education char(3),
level_incomplete_education char(3),
knowledge_area char(52),
finality char(3),
modality char(4),
relationship_with_objectives char(3),
observation varchar(1024),
primary key(codigo) )