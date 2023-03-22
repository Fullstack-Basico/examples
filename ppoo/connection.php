<?php
abstract class Connection {
abstract public function executeConnection();
}


class PostgreSql extends Connection {

    public function executeConnection(){
        echo "Success Connection Postgresql! <br>";
    }
}


class Mysql extends Connection {

    public function executeConnection(){
        echo "Success Connection Mysql! <br>";
    }
}

class MongoDB extends Connection {

    public function executeConnection(){
        echo "Success Connection MongoDB! <br>";
    }
}




function connected(Connection $connection){
  
    $connection->executeConnection();
}


$instancePostgresql = new PostgreSql();
$instanceMysql = new Mysql();

connected($instanceMysql);
connected($instancePostgresql);



?>