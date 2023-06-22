/**Conteo**/

select * 
from libros


select id, nombre, id_biblioteca as identificador_biblioteca
from libros




select count(*) as conteo_regitros
from libros

/**Sumatoria**/
select *
from escuelas e 

select sum(numero_estudiantes) as numero_estudiantes
from escuelas e 


/**Mostrar los registro no repetidos*/

select distinct  *
from empleados e 

select distinct salario,edad 
from empleados e 


/** Promedio **/

select avg(numero_estudiantes)  as promedio_numero_estudiantes 
from escuelas e 


/** Maximo y Minimo**/

select *
from escuelas e 

select min(numero_estudiantes) as minimo_estudiantes_escuela
from escuelas e 

select max(numero_estudiantes) as maximo_estudiantes_escuela
from escuelas e 

/**Ordenamiento datos**/

select * 
from escuelas e 
order by numero_estudiantes asc 


select * 
from escuelas e 
order by numero_estudiantes desc



select * 
from escuelas e 
order by nombre  asc 


select * 
from escuelas e 
order by nombre  desc






/**Agrupaciones**/

select salario , count(*) numero_empleados
from empleados e 
group by salario 

select nombre , count(*) numero_regitros_nombre
from empleados e 
group by nombre 



