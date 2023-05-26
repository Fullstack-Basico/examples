<?php


class Calculadora {

    private $operacion = "Sin Operacion";
    private $parametros=[];
    private $resultado = "Sin Resultado";

   private function suma (){
    $this->resultado =  $this->parametros[0] + $this->parametros[1];

    return true;
    }
    
   private function resta (){
        $this->resultado =  $this->parametros[0] - $this->parametros[1];

         return true;
    }
    
    
    private function multiplicacion (){
        $this->resultado =  $this->parametros[0] * $this->parametros[1];

        return true;
    }
    
    
    private function division (){
        $this->resultado =  $this->parametros[0] / $this->parametros[1];

        return true;
    }
    
    
    private function sumatoria () {
    
        $limite = $this->parametros[0];
        $valorSumatoria = 0 ;
        $i = 1;
        while ($i <= $limite) {
    
            $valorSumatoria = $valorSumatoria + pow($i,2);
    
            $i++;
        }
    
        $this->resultado =  $valorSumatoria;
        return true;
    
    }
    
    
    public function mostrarResultado () {
    
        echo "Resultado ".$this->operacion." = ". $this->resultado;
        return true;
    
    }

    public function ejecutar ($operacionPr, $parametrosPr){
        $this->operacion= $operacionPr;
        $this->parametros = $parametrosPr;

        switch ($this->operacion) {
            case 'Suma':
              $this->suma();
                break;
            case 'Resta':
                $this->resta();
                break;
            
            case 'Multiplicación':
                $this->multiplicacion();
                break;
    
            case 'División':
                $this->division();
                break;
    
            case 'Sumatoria':
                $this->sumatoria();
                break;
                
            default:
                echo "Error No selecciono operacion valida!!!";
                break;
        }

    }

}

$miCalculadora = new Calculadora();

$miCalculadora->ejecutar("Sumatoria",[4]);

$miCalculadora->mostrarResultado();




?>