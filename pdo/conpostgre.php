<?php


$conexao = new PDO("pgsql:host=192.168.15.15;port=5432;dbname=Banco;user=WARELINE;password=BENEF" );
$stmt =   $conexao->prepare("Select login, senha from tblusuario order by login");
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