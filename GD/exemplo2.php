<?php

    $image = imagecreatefromjpeg("certificado.jpg");

    $tileColor = imagecolorallocate($image,0,0,0);
    $gray = imagecolorallocate($image,100,100,100);

    imagestring($image,5,450,150, "CERTIFICADO", $tileColor);
    imagestring($image,5,440,350, "WILLIAM VIEIRA", $gray);
    imagestring($image,5,440,370, utf8_decode("CONCLUÍDO EM: ") . date("d/m/Y") , $gray);

    header("Content-type: image/jpeg");

    //imagejpeg($image);
    imagejpeg($image,"certificado-".date("Y-m-d").".jpg",10);

    imagedestroy($image);