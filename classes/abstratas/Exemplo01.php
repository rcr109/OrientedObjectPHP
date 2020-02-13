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
            echo 'o veículo está a '.$valor.' por hora.<br><br>';
            $this->setVelocidade($valor);
        }
        public function frenar($valor){
            echo 'o veículo está a '.$valor.' por hora.<br><br>';
        }
        public function mudarMarcha($marcha){
            echo 'o veículo está na '.$marcha.' .<br><br>';
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

    class Focus extends Automovel{ //extends Automovel (automaticamente implementa Veiculo)
        public function pilotoAutomatico(){
            echo 'Modo  automático de direção ligado.<br><br>';
        }
    }

    $focus = new Focus();
    echo $focus->pilotoAutomatico();//usando uma função própria (de FOCUS)
    echo $focus->getVelocidade();//usando uma função herdada de AUTOMOVEL
    echo $focus->acelerar("59");//usando uma função herdada de AUTOMOVEL e implementada obrigatóriamente por ser da interface VEICULO
    

?>