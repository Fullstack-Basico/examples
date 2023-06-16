/**
 * Taller
 */

create table escuelas(
id integer,
nombre varchar(50),
numero_estudiantes integer
);


create table bibliotecas(
id integer,
nombre varchar(50),
sitio_web varchar(100)
);


create table libros(
id integer,
nombre varchar(50),
autor varchar(100)
);



insert into escuelas (id,nombre,numero_estudiantes)
values (1,'ALFONSO REYES',1000),(2,'SAN JOSE', 15000),(3, 'LLANO ORIENTAL', 2000);




insert into bibliotecas (id,nombre,sitio_web)
values (1,'CENTRO SABER','http://centro.saber.co'),
(2,'LUIS ANGELA ARANGO', 'http://arango.com'),
(3, 'VIRGILO BARCO', 'http://virgilio.co');



insert into libros  (id,nombre,autor)
values (1,'CIEN AÑOS SOLEDAD','GABRIEL GARCIA MARQUEZ'),
(2,'YO ROBOT', 'ISSAC ASIMOV' ),
(3, 'OSCURIDAD VISIBLE', 'WILLIAM GOLDING');


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

