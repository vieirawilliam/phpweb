<?php

    require_once("config.php");

    #SELECIONA TODOS OS USUARIO
    //$sql = new Sql();
    //$sqlusuarios = $sql->select(("Select * from tb_usuarios"));
    //echo json_encode($sqlusuarios);

    //SELECIONA SOMENTE UM USUÁRIOS
    //$row = new Usuario();
    //$row->loadById(1);
    //echo $row;

    //SELECIONA TODOS OS USUARIOS
    //$lista = Usuario::getList();
    //echo json_encode($lista);

    //SELECIONA TODOS OS USUARIOS
    $lista = Usuario::search("user");
    echo json_encode($lista);


