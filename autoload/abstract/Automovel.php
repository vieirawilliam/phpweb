<?php

abstract class Automovel implements Veiculo{
    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou á " . $velocidade . " km/h" ;    
    }
    
    public function frenar($velocidade)
    {
        echo "O veiculo frenou á " . $velocidade . " km/h" ;
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo esta de marcha " . $marcha;
    }

}