/**
 * Actualizacion y eliminacion registros
 */


select *
from empleados;



/**Actualizacion**/


update empleados
set salario=1200000;

update empleados 
set salario= 800000
where id = 6;



update empleados 
set salario= 500000, edad= 20 
where id = 6;

update empleados 
set salario= 10000000, edad= 60 
where nombre = 'carlos';




update empleados 
set salario= 1100 
where nombre = 'carlos';


update empleados 
set salario= 3300 
where nombre = 'carlos' and edad = 18 and salario = 2200;


update empleados 
set salario= null
where nombre = 'carlos' and edad = 66;

/**Eliminación/**/


delete from empleados
where id = 5;



delete from empleados
where nombre = 'gloria';


delete from empleados
where nombre = 'carlos' and edad = 60;




/**consultas compuestas/**/


select *
from empleados
where nombre = 'juan'




select *
from empleados
where edad < 30;



select *
from empleados
where edad > 30;



select *
from empleados
where edad > 30 and salario < 1000000;




select nombre
from empleados
where edad > 30 and salario < 1000000;



select *
from empleados
where edad > 30 or salario < 1000000;


select nombre,edad
from empleados
where edad <> 31 and nombre <> 'violeta';


select nombre,edad
from empleados
where edad = 31;


select id, nombre, salario
from empleados
where salario is null;


select id, nombre, salario
from empleados
where salario is not null;



/**  >, <,<>, */









