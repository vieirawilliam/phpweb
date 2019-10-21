<?php

$frase = "A repetição é mãe da retenção";
$palavra = "mãe";
$q = strpos($frase, $palavra);
$texto = substr($frase,0,$q);

$mae = substr($frase,$q,4);
echo $mae;
echo "<br>";

var_dump($texto);
echo "<br>";

$texto2 = substr($frase,$q - strlen($palavra),strlen($frase));
echo $texto2;
echo "<br>";

$texto2 = substr($frase,0,17);
echo $texto2;
echo "<br>";

var_dump($texto2);

