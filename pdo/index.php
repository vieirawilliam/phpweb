<?php

    require_once("config.php");
    use Funcoes\Funcoes;

    $teste = new Funcoes();

    $cad = new Funcoes();
    $teste = $cad->codIF("080908");

    echo $teste;
    #var_dump($cad);

?>