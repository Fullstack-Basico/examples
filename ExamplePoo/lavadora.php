<?php

class Lavadoras extends Electrodomesticos {

    public $nombre = "Lavadora";
    public $marca;
    public bool $secadora;
    private int $vidaUtil;

    public function lavar(){

        echo "Lavar Ropa";
    }
    public function secar(){
        echo "Secar Ropa";
    }

}






?>