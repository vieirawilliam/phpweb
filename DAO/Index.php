<?php

    require_once("config.php");

    #SELECIONA TODOS OS USUARIO
    //$sql = new Sql();
    //$sqlusuarios = $sql->select(("Select * from tb_usuarios"));
    //echo json_encode($sqlusuarios);

    #SELECIONA SOMENTE UM USUÁRIOS
    //$row = new Usuario();
    //$row->loadById(1);
    //echo $row;

    #SELECIONA TODOS OS USUARIOS
    //$lista = Usuario::getList();
    //echo json_encode($lista);

    #SELECIONA TODOS OS USUARIOS
    //$lista = Usuario::search("user");
    //echo json_encode($lista);

    #SELECIONA USUARIO E SENHA LOGIN
    //$login = new Usuario();
    //$login->login("will","will123456");
    //echo json_encode($login); 
    //echo $login;

    #INSERT DE USUARIO
    //$aluno = new Usuario("teste","iiiii");
    //$aluno->insert();
    //echo $aluno;

    #UPDATE DE USUARIO
    //$usuario = new Usuario();
    //$usuario->loadById(5);
    //$usuario->update("willvieira","oli");
    //echo $usuario;

    #DELETE DE USUARIO
    $usuario = new Usuario();
    $usuario->loadById(11);
    $usuario->delete(); 
    echo $usuario;
;

