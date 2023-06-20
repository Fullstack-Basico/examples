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
autor varchar(100),
id_biblioteca int,
foreign key (id_biblioteca) references bibliotecas(id)
);



insert into escuelas (id,nombre,numero_estudiantes)
values (1,'ALFONSO REYES',1000),(2,'SAN JOSE', 15000),(3, 'LLANO ORIENTAL', 2000);




insert into bibliotecas (id,nombre,sitio_web, id_escuela)
values (1,'CENTRO SABER','http://centro.saber.co',1),
(2,'LUIS ANGELA ARANGO', 'http://arango.com',1),
(3, 'VIRGILO BARCO', 'http://virgilio.co',3);



insert into bibliotecas (id,nombre,sitio_web)
values (4, 'ABC', 'http://abc.co');



insert into libros  (id,nombre,autor,id_biblioteca)
values (1,'CIEN AÑOS SOLEDAD','GABRIEL GARCIA MARQUEZ',2),
(2,'YO ROBOT', 'ISSAC ASIMOV', 2 ),
(3, 'OSCURIDAD VISIBLE', 'WILLIAM GOLDING', 3);


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


