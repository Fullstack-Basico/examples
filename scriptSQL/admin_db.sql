create database test_practice character set utf8 collate utf8_unicode_ci;

create database test_app character set utf8 collate utf8_unicode_ci;

show databases;

create user 'stiv'@'%' IDENTIFIED by 'passadmin';


grant all privileges on test_app.* to 'stiv'@'%';


grant update  on test_app.* to 'stiv'@'%';

grant delete  on test_app.* to 'stiv'@'%';

grant select  on test_app.* to 'stiv'@'%';

grant create  on test_app.* to 'stiv'@'%';




repair table mysql.db;
repair table mysql.global_priv;