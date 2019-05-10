create database if not exists Universidad;
use Universidad;

create table if not exists facultades(
idfacultad varchar(10) not null,
primary key(idfacultad),
nombre_facultad varchar (45) not null
)Engine= innodb;

create table if not exists oferta_academica(
idoferta varchar(10) not null,
primary key (idoferta),
nombre varchar(45) not null, 
tipo enum('pregrado', 'posgrado'),
idfacultad varchar(10) ,
foreign key(idfacultad) references facultades(idfacultad)
)Engine =  innodb;

create table if not exists pensum (
idpensum varchar(8) not null,
primary key(idpensum),
año datetime not null,
idoferta varchar(10) not null,
foreign key (idoferta) references oferta_academica(idoferta)
)Engine= innodb;

create table if not exists alumnos(
idalumno varchar(10) not null,
primary key (idalumno), 
nombre varchar (45) not null, 
apellido varchar(45)
)Engine= innodb;

create table if not exists oferta_alumnos(
idoferta varchar(10) not null, 
idalumno varchar(10) not null, 
primary key (idoferta, idalumno),
foreign key (idoferta) references oferta_academica(idoferta),
foreign key(idalumno) references alumnos(idalumno)

)Engine= innodb;

create table if not exists tipo_beca(
idtipobeca varchar(5) not null, 
primary key (idtipobeca),
nombre varchar (45) not null
)Engine= innodb;

create table if not exists beca(
idbeca varchar(5) not null, 
primary key (idbeca), 
porcentaje double not null, 
idalumno varchar(10) not null, 
idtipobeca varchar(50) not null, 
foreign key (idalumno) references alumnos(idalumno),
foreign key (idtipobeca) references tipo_beca(idtipobeca)

)Engine= innodb;

create table if not exists materias(
idmateria varchar (5) not null, 
primary key (idmateria), 
nombre varchar(45) not null
)Engine= innodb;

create table if not exists materias_alumnos(
idmateria varchar(5) not null,
idalumno varchar (10) not null, 
primary key(idmateria, idalumno),
foreign key (idmateria) references materias(idmateria),
foreign key (idalumno) references alumnos(idalumno)
)Engine= innodb;

create table if not exists horarios(
horainicio time not null, 
primary key(horainicio),
horafinal time not null,
dia varchar(10) not null
)Engine= innodb;

create table if not exists hora_materia(
horainicio time not null, 
idmateria varchar(5) not null, 
idgrupo varchar (5) not null,
primary key(horainicio, idmateria),
foreign key (horainicio) references horarios(horainicio),
foreign key (idmateria) references materias(idmateria)
)Engine= innodb;

create table if not exists docentes(
iddocente varchar(10) not null, 
primary key (iddocente),
nombre varchar (45) not null,
apellido varchar(45) not null 
)Engine= innodb;

create table if not exists notas(
nota double not null ,
primary key (nota),
idalumno varchar(10) not null,
idmateria varchar(5) not null, 
foreign key (idalumno) references alumnos(idalumno),
foreign key (idmateria) references materias(idmateria)
)Engine= innodb;

create table if not exists materia_docente(
idmateria varchar(5) not null, 
iddocente varchar(10) not null, 
idgrupo varchar (5) not null,
primary key (idmateria, iddocente),
foreign key (idmateria) references materias(idmateria),
foreign key (iddocente) references docentes(iddocente)

)Engine= innodb;