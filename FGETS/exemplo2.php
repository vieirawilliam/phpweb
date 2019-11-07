<?php

    $filename = "logo.png";

    $base64 = base64_encode(file_get_contents($filename));

    $fileinfo = new finfo(FILEINFO_MIME_TYPE);

    $mimetipe= $fileinfo->file($filename);

    $base64encode = "data:" . $mimetipe . ";base64," . $base64;

    ?>

    <a href="<?=$base64encode?>" target="_blank"> Link para Imagem </a>

    <img src ="<?=$base64encode?>">