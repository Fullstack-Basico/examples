/*JOINS SQL*/


select *
from escuelas as es
inner join bibliotecas as b on b.id_escuela = es.id 


select *
from escuelas as es
left join bibliotecas as b on b.id_escuela = es.id 


select *
from escuelas as es
right join bibliotecas as b on b.id_escuela = es.id 




select *
from escuelas as es
left join bibliotecas as b on b.id_escuela = es.id 
where b.id_escuela is null




select *
from escuelas as es
right join bibliotecas as b on b.id_escuela = es.id 
where es.id is null



select *
from escuelas as es
left join bibliotecas as b on b.id_escuela = es.id 
union 
select *
from escuelas as es
right join bibliotecas as b on b.id_escuela = es.id 




select *
from escuelas as es
left join bibliotecas as b on b.id_escuela = es.id 
where b.id_escuela is null
union
select *
from escuelas as es
right join bibliotecas as b on b.id_escuela = es.id 
where es.id is null


select *
from escuelas e , bibliotecas b 


/**Joins Biblioteca y Libros**/


select *
from libros as l 
join bibliotecas as b on b.id = l.id_biblioteca



select *
from libros as l 
left join bibliotecas as b on b.id = l.id_biblioteca

select *
from libros as l 
right join bibliotecas as b on b.id = l.id_biblioteca




select *
from libros as l 
left join bibliotecas as b on b.id = l.id_biblioteca
where b.id is null



select *
from libros as l 
right join bibliotecas as b on b.id = l.id_biblioteca
where l.id is null






select *
from libros as l 
left join bibliotecas as b on b.id = l.id_biblioteca
union
select *
from libros as l 
right join bibliotecas as b on b.id = l.id_biblioteca




select *
from libros as l 
left join bibliotecas as b on b.id = l.id_biblioteca
where b.id is null
union
select *
from libros as l 
right join bibliotecas as b on b.id = l.id_biblioteca
where l.id is null



select *
from libros l, bibliotecas b 






