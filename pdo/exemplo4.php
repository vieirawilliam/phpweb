<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt  = $conn->prepare("Update tb_usuarios set deslogin = :LOGIN, dessenha= :PASSWORD where idusuario = :ID");

$login = "jj";
$password = "teste";
$id = 4;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Registro alterado com sucesso!";


?>