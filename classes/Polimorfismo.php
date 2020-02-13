<?php

abstract class Animal{
    public function emiteSom(){
        return 'argh';
    }
    public function seMove(){
        return 'move';
    }
}

class Cachorro extends Animal{
    public function emiteSom(){
        return 'Cachorro  late: au  au au ';
    }
    public function seMove(){
        return 'e corre.<br>';
    }
}

class Cavalo extends Animal{
    public function emiteSom(){
        return 'Cachorro  relincha: rrererrerer ';
    }
    public function seMove(){
        return 'e galopa.<br>';
    }
}

class Passarinho extends Animal{
    public function emiteSom(){
        return 'Passarinho  pia: piupiupiu ';
    }
    public function seMove(){
        return 'e voa e '. parent::seMove().'.'; // trazendo comportamento do pai junto com o do filho
    }
}

$cachorro = new Cachorro();
$cavalo = new Cavalo();
$passarinho = new Passarinho();

echo $cachorro->emiteSom();
echo $cachorro->seMove();
echo '<br><br>';
echo $cavalo->emiteSom();
echo $cavalo->seMove();
echo '<br><br>';
echo $passarinho->emiteSom();
echo $passarinho->seMove();

?>