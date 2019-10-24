<?php

require_once "exemplo2.php";

class Pessoa {

    public $nome;

    public function falar(){
        return "<br>O meu nome é " . $this->nome;
    }

}

$william = new Pessoa();
$william->nome = " William Vieira";
echo $william->falar();

echo "<br>";
echo "<br>";
echo "<br>";

$carro = new Carro();
$carro->setModelo("EcoSport");
$carro->setMotor("1.6");
$carro->setAno("2014");
echo $carro->exibir();



?>