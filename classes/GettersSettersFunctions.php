<?php

class Carro {
    private $modelo;
    private $motor;
    private $ano;

    //misc functions
    public function ExibeCarro(){
        //return 'Modelo: '.$this->modelo.'<br> Motor: '.$this->$motor.'<br> Ano: '.$this->ano.'.';
        return array(
            'modelo'=>$this->getModelo(),
            'motor' =>$this->getMotor(),
            'ano'   =>$this->getAno()
        );
    }
    //getters
    public function getModelo():string{
        return $this->modelo;
    }
    public function getMotor():float{
        return $this->motor;
    }
    public function getAno():int{
        return $this->ano;
    }
    //setters
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }
    public function setMotor($motor){
        $this->motor = $motor;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
}

$carro = new Carro();
$carro->setModelo("Focus");
$carro->setMotor("1.6");
$carro->setAno(2018);

// interpolação de texto utilizando os getters
echo "Modelo: ".$carro->getModelo().'<br> Motor: '.$carro->getMotor().' <br> Ano: '.$carro->getAno().'';

echo '<br><br>';

// interpolaçao de texto utlizando os valores da ARRAY retornada pela função EXIBECARRO
echo "Modelo: ".$carro->ExibeCarro()['modelo'].' <br> Motor: '.$carro->ExibeCarro()['motor'].' <br> Ano: '.$carro->ExibeCarro()['ano'].'';

echo '<br><br>';

var_dump($carro->ExibeCarro());


?>