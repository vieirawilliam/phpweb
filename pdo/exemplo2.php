<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost;ConnectionPooling=0","","");

$stmt = $conn->prepare("Select * from tb_usuarios order by deslogin");

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