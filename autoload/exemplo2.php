<?php

function incluirClasse($nomeClasse){
    if(file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse.".php");
    }
}

spl_autoload_register("incluirClasse");
spl_autoload_register(function($nomeClasse)
{
    if (file_exists("Abstract" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
        require_once("Abstract" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }
});



$carro = new DelRey();
$carro->acelerar(80);
echo "<br>";
$carro->trocarMarcha("3");
echo "<br>";
$carro->frenar(20);
echo "<br>";
$carro->empurrar();

?>