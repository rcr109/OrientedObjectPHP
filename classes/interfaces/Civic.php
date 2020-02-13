<form>
    <input type="text" name="acelera" value="acelera">
    <input type="text" name="freia" value="freia">
    <input type="text" name="mudaMarcha" value="Muda">
    <input type="submit" value="OK">
</form>


<?php
require_once "Interface.php";


class Civic implements Veiculo{
    private $velocidade=100;
    private $marcha=5;

    public function acelerar($valor){
        echo 'o veículo está a '.$valor.' por hora.<br><br>';
    }

    public function frenar($valor){
        echo 'o veículo está a '.$valor.' por hora.<br><br>';
    }

    public function mudarMarcha($marcha){
        echo 'o veículo está na '.$marcha.' .<br><br>';
    }

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

$carro = new Civic();

if (isset($_GET)){
    $carro->mudarMarcha(6);
    $carro->frear(220);
    $carro->acelerar(300);
    echo 'get';
}else{
    $carro->mudarMarcha(2);
    $carro->frear(220);
    $carro->acelerar(300);
}


var_dump($carro);

?>