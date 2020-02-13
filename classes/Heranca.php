<?php
require_once "StaticMethodCPF.php";

class Documentos{
    private $numero;

    public function setNumero($numero){
        $this->numero=$numero;
    }
    public function getNumero(){
        return $this->numero;
    }
}

class CPF extends Documentos{
    public static function validaCPF($cpf):bool{
        return Documento::validaCPF($cpf); //usando a static function de StaticMethodCPF sem instanciá-la
    }
}

//instancia um objeto CPF e configura uma numero (atributo do pai DOCUMENTO)
$doc_cpf = new CPF();
$doc_cpf->setNumero('35922769057');
//utilizando um método próprio valida o número do CPF 
$validado = $doc_cpf->validaCPF($doc_cpf->getNumero());
//devolve resposta ao usuário
if ($validado){
    echo 'O  CPF: '.$doc_cpf->getNumero().' é válido.';
}else{
    echo 'O  CPF: '.$doc_cpf->getNumero().' não é válido.';
}

?>