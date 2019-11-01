<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$conn->beginTransaction();

$stmt  = $conn->prepare("delete from tb_usuarios where idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollBack();

$conn->commit();

echo "Registro deletado com sucesso!";


?>