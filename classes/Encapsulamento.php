<?php

class Pessoa{
    public $nome = 'Ricardo Castilho Resende';
    protected $idade = 41;
    private $senha = '12345';

    public function verDados(){
        echo $this->nome;
        echo '<br>';
        echo $this->idade;
        echo '<br>';
        echo $this->senha;
        echo '<br>';
    }
}

class programador extends Pessoa{

}

$pessoa = new Programador();
$pessoa->verDados();
echo '<br><br>';

echo $pessoa->nome;
echo '<br><br>';

echo get_class($this);
//echo $pessoa->idade;  // Não é possível executar pelo fato do atributo ser protected (dentro da classe ou quem herda da classe pode acessar)
//echo $pessoa->senha;  // Não é possível executar pelo fato do atributo ser private (apenas de dentro da classe pode acessar)

?>