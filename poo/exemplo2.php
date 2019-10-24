<?php

class Carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getMotor(){
        return $this->motor;
    }
    public function setMotor($motor){
        $this->motor = $motor;
    }
    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function exibir(){
        return "Modelo: " . $this->getModelo() .
               "<br>Motor: " . $this->getMotor() .
               "<br>Ano: " . $this->getAno();
    }
}

 $gol = new Carro();
 $gol->setModelo("Gol GT");
 $gol->setMotor("1.6");
 $gol->setAno("2005");

 echo $gol->exibir();

 echo "<br>";
 echo "<br>";

 print_r($gol->exibir());

 echo "<br>";

 var_dump(($gol->exibir()));

?>