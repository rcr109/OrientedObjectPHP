<?php

class Documento{

private $numero;

public function getNumero(){
    return $this->numero;
}

public function setNumero($numero){
    $cpfValido = Documento::ValidaCpf($numero); // Modo de chamar uma função ESTATIC em uma classe
    if ($cpfValido){
        $this->numero = $numero;
    } else {
        throw new Exception("CPF inválido.",1);
        //echo 'CPF inválido.';
    }
    
}

public static function ValidaCpf($cpf): bool{

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

//validando CPF após estanciar a classe Documento
$numero='73003559001'; // Gerador de CPF on line
$cpf = new Documento();
$cpf->setNumero($numero);
echo 'O  CPF gerado foi: '.$cpf->getNumero();
echo '<br><br><br>';

//validando CPF SEM estanciar a classe Documento
$numero = '72463090056';
$valido=Documento::ValidaCpf($numero);//chamando a função estática dentro da classe sem estanciá-la (a classe)
if($valido){
    echo 'O CPF '.$numero.' é válido.';
}else{
    echo 'O CPF '.$numero.' é inválido.';
}



?>