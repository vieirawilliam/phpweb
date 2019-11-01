<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("select * from tb_usuarios order by idusuario");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    # code...
    foreach ($row as $key => $value) {
        # code...
        echo "<strong>".$key.":</strong>".$value."<br>";
    }
    echo "---------------------------------------------<br>";
}

var_dump($results);


?>