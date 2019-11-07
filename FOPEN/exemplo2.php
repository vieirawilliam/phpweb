<?php

    require_once("config.php");

    $sql = new Sql();

    $usuarios = $sql->select("select * from tb_usuarios order by deslogin");

    //print_r($usuarios);

    $headers = array();

    #PEGA OS DADOS DO CABEÇALHO
    foreach($usuarios[0] as $key => $value){
        array_push($headers, ucfirst($key));
    }

    #CRIA O ARQUIVO CSV
    $file = fopen("usuarios.csv" , "w+");

    #ESCREVE O CABEÇALHO NO ARQUIVO
    fwrite($file,implode(";" , $headers). "\r\n");

    #LAÇO NA LINHA
    foreach($usuarios as $row){

        $data = array();

        #LAÇO NAS COLUNAS
        foreach($row as $key => $value){
            array_push($data,$value);
        }

        fwrite($file,implode(";" , $data) . "\r\n");
    }

    echo "Arquivo criado com sucesso!";

    fclose($file);