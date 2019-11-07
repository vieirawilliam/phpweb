<?php

    $file = fopen("log.txt", "a+");

    fwrite($file, "William Vieira" . date("Y-m-d H:i:s") . "\r\n");

    fclose($file);

    echo "Arquivo criado com sucesso!"; 