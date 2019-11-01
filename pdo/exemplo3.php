<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt  = $conn->prepare("Insert into tb_usuarios (deslogin, dessenha) values (:LOGIN,:PASSWORD) ");

$login = "jose";
$password = "080908";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Registro inserido com sucesso!";


?>