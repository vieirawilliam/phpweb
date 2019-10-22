<?php

 function ola($texto,$periodo="Bom dia"){
     return "Ola $texto $periodo <br>";
 }

 echo ola("");
 echo ola("Mundo");
 echo ola("William","Boa noites");
