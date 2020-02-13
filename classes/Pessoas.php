<?php

class Pessoa{
    public $nome;
    public function falaNome(){
        return "O  meu nome é ".$this->nome;
    }
}

$ricardo = new Pessoa();
$ricardo->nome='Ricardo Castilho Resende';
echo $ricardo->falaNome();

?>