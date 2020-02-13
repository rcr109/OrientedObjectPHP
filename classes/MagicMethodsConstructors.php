<?php

class Endereco{
    private $logradouro;
    private $cidade;
    private $numero;

    //apesar de no curso ter sido indicado o uso do __contruct como construtor, não funcionou, utilizando o padrão
    public function Endereco($logra, $cidad, $numer){
        $this->logradouro = $logra;
        $this->cidade = $cidad;
        $this->numero = $numer;
    }

}

$endereco = new Endereco("Rua  B", "Salvador", "56");
var_dump($endereco);

//magis methods => functions(__construct, __destruct, __toString)

?>