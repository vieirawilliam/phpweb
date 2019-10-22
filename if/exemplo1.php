<?php
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

$qualASuaIdade = 125;

if ($qualASuaIdade < $idadeCrianca) {
    echo "Crianca";
} else if ($qualASuaIdade < $idadeMaior) {
    echo "Adolecente";
} else if ($qualASuaIdade < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior) ? "Menor idade" : "Maior de idade";
