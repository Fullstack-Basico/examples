/**
 * Taller
 */

create table escuelas(
id integer primary key,
nombre varchar(50),
numero_estudiantes integer
);


create table bibliotecas(
id integer primary key,
nombre varchar(50),
sitio_web varchar(100),
id_escuela int,
foreign key (id_escuela) references escuelas(id)
);


create table libros(
id integer primary key,
nombre varchar(50),
id_biblioteca int,
id_autor int,
foreign key (id_biblioteca) references bibliotecas(id),
foreign key (id_autor) references autores(id)
);


create table autores(
id integer primary key,
nombre varchar(50),
anios varchar(100)
);





insert into autores  (id,nombre,anios)
values (1,'GABRIEL GARCIA MARQUEZ',60),
(2, 'ISSAC ASIMOV', 75 ),
(3,  'WILLIAM GOLDING', 80);




insert into escuelas (id,nombre,numero_estudiantes)
values (1,'ALFONSO REYES',1000),(2,'SAN JOSE', 15000),(3, 'LLANO ORIENTAL', 2000);




insert into bibliotecas (id,nombre,sitio_web, id_escuela)
values (1,'CENTRO SABER','http://centro.saber.co',1),
(2,'LUIS ANGELA ARANGO', 'http://arango.com',1),
(3, 'VIRGILO BARCO', 'http://virgilio.co',3);



insert into bibliotecas (id,nombre,sitio_web)
values (4, 'ABC', 'http://abc.co');



insert into libros  (id,nombre,id_autor,id_biblioteca)
values (1,'CIEN AÑOS SOLEDAD',1,2),
(2,'YO ROBOT', 2, 2 ),
(3, 'OSCURIDAD VISIBLE', 3, 3);


select * 
from escuelas ;

select numero_estudiantes
from escuelas;



select *
from bibliotecas;


select sitio_web
from bibliotecas;


select *
from libros;


select autor
from libros;



/*Eliminar Tablas*/

drop table libros;

drop table escuelas ;

drop table bibliotecas;


