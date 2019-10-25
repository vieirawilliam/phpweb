<?php


abstract class Animal{
    public function falar(){
        return "Som";
    }

    public function mover()
    {
        return "Anda";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "late";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }

    public function mover()
    {
        return "Voa e ". parent::mover();
    }
}

echo "Cachorro <br>";
$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "Passaro <br>";
$pluto = new Passaro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";


?>