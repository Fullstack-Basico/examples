/**
 * CREAR TABLA
 * */

create table empleados(
id INTEGER,
nombre VARCHAR(15),
edad INTEGER,
salario DECIMAL(10,2)
);


create table universidades(
identificador INTEGER,
nombre_institucion VARCHAR(100)
);




/**
 * INSERTAR DATOS O REGISTROS EN TABLA
 * */

insert into empleados (id, nombre, edad ,salario)
values (1,'stiv', '31', 10000.12);



insert into empleados (id, nombre, edad)
values (2,'carlos', '31');


insert into empleados (edad,id,nombre)
values (40,3,'Gloria');



insert into empleados (edad,id,nombre)
values (45,4,'Adriana'),(18,5,'juan'),(32,6,'violeta');


/**
 * CONSULTA DE REGISTROS O DATOS
 * */

select *
from empleados;



select id,nombre
from empleados;


select nombre, edad
from empleados;



select nombre, salario
from empleados;



select nombre, salario,edad,id
from empleados;


select nombre as 'Nombre Completo', edad as 'Edad (Años)'
from empleados;




/**TIPOS DE ATRIBUTOS-COLUMNAS*/


/**
 * ENTEROS:
 * 
 * INT o INTEGER
 * SMALLINT
 * MEDIUMINT
 * BIGINT
 */




/**
 * DECIMALES:
 * 
 * DECIMAL (p, e)
 */



/**
 * TEXTO:
 * 
 * CHAR(n)
 * VARCHAR(n)
 * TEXT
 */



/**
 * FECHA:
 * 
 * DATE  -> 'YYYY-MM-DD'
 * TIME -> 'HH:MM:SS'
 * DATETIME -> 'YYYY-MM-DD HH:MM:SS'
 * TIMESTAMP -> marca de tiempo
 */


/**
 * BOLLEANOS:
 * 
 * BOOL  -> verdadero (1) o falso (0)
 */




