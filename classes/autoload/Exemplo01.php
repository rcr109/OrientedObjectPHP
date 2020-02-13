<?php

//function AUTOLOAD para usar no carregamento automático de classes IMPORTANTE@!
function __autoload($nomeclasse){
    require_once("$nomeclasse.php");
    var_dump($nomeclasse);// para ver as classes que estão sendo solicitadas
}

require_once("../../Abstracts.php");

$focus = new Focus();
$focus->acelerar(50);
$focus->frenar(90);

class CPF{
    private $cpf='55363546343';


    public function getCPF(){
        return $this->cpf;
    }

    public function validaCPF($cpf){
        $cpfValido = Documento::ValidaCpf($numero);
        return $cpfValido;
    }

}

$documento = new CPF();
echo $documento->getCPF();
echo '<br><br>';
echo $documento->validaCPF('433534534534');


//echo $focus->pilotoAutomatico();//usando uma função própria (de FOCUS)
//echo $focus->getVelocidade();//usando uma função herdada de AUTOMOVEL
//echo $focus->acelerar("59");//usando uma função herdada de AUTOMOVEL e implementada obrigatóriamente por ser da interface VEICULO

?>