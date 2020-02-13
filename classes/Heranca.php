<?php

class Documento{
    private $numero;

    public function setNumero($numero){
        $this->numero=$numero;
    }
    public function getNumero(){
        return $this->numero;
    }
}

class CPF extends Documento{

    
    public static function validaCPF($cpf):bool{

        if(empty($cpf)) {
            return false;
        }
     
        //substitui qualquer caracter não numérico por ZERO
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        //preenche com zeros à esquerda
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        //verifica se existem 11 dígitos
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
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