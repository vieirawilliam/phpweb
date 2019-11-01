<?php

    require_once("config.php");
    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("William Vieira");
    $cad->setEmail("willian_43@hotmail.com");
    $cad->setSenha("12346");

    $cad->registraVenda();
    echo $cad;

?>