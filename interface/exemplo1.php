<?php

 
    interface Veiculo{

        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);

    }    


    class Civic implements Veiculo{
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


    $carro = new Civic();

    $carro->trocarMarcha(1);
    $carro->acelerar(100);
    $carro->frenar(10);

?>