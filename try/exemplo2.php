<?php

    function trataNome($name)
    {
        if(!$name){
            throw new Exception("Nenhum nome encontrado", 1);
            
        }

        echo ucfirst($name) . "<br>";
    }

    try {
        trataNome("William Vieira");
        trataNome("");
    } catch (Exception $e) {
        echo $e->getMessage();
    }finally{
        echo "<br>";
        echo "Executou o try!";
    }