<?php

interface Veiculo{
    public function acelerar($valor);
    public function frenar($valor);
    public function mudarMarcha($marcha);
}

abstract class Automovel implements Veiculo{
    
    public $velocidade=100;
    public $marcha=5;
    
    //implementando os métodos obrigatórios da interface Veiculo (acima) 
    public function acelerar($valor){
        $valor1 = $this->getVelocidade() + $valor;
        echo 'Acelerando  '.$valor.' o  veículo está a '.$valor1.' por hora.<br><br>';
        $this->setVelocidade($valor);
    }
    public function frenar($valor){
        $valor1 = $this->getVelocidade() - $valor;
        echo 'Frenando '.$valor.' o  veículo está a '.$valor1.' por hora.<br><br>';
    }
    public function mudarMarcha($marcha){
        echo 'o  veículo está na '.$marcha.' .<br><br>';
    }

    //implementando getters and setters próprios
    public function setVelocidade($valor){
        $this->velocidade += $valor; 
    }
    public function setMarcha($marcha){
        $this->marcha = $marcha; 
    }
    public function getVelocidade(){
        return $this->velocidade;; 
    }
    public function getMarcha(){
        return $this->marcha; 
    }
}

?>