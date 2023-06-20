/*Consultas */


select *
from libros
where  nombre is not null


select *
from libros
where  nombre is  null


select *
from libros
where  id > 2

select autor, id, nombre
from libros 
where nombre is  null and autor = 'a'


/**Actualizaciones*/

update libros
set nombre =  "oscuridad visible"
where id = 3


update libros
set autor =  "issac asimov"
where autor = "ISSAC ASIMOV"


update libros
set nombre =  "La Fundacion"
where nombre is null;




update libros
set autor = NULL
where id = 7 ;



/**Eliminaciones*/

delete from libros
where id is null


delete from libros
where autor = 'e'


delete from libros 
where autor is null



delete from libros 
where autor is null and nombre is null;






