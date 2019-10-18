<?php

$nome = "William";

function teste(){
    global $nome;
    echo $nome;
}

teste();

?>