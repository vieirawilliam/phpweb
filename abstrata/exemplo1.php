<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}    


abstract class Automovel implements Veiculo{
    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou " . $velocidade;    
    }
    
    public function frenar($velocidade)
    {
        echo "O veiculo frenou " . $velocidade;
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo esta de " . $marcha;
    }

}

class DelRey extends Automovel{

    public function empurrar(){

    }
}

$carro = new DelRey();
$carro->acelerar(200);

?>



