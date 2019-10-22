<?php

$data = date("d-m-Y");

echo $data;

echo "<br>";

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100 ; $i--) { 
    # code...
    echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>"


?>