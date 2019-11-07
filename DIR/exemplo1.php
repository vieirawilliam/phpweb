<?php

    $name = "images";

    if(!is_dir($name)){
        mkdir($name);

        echo "Diretorio criado";
    }else{
        
        rmdir($name);
        echo "Foi removido";
    }