<?php

    error_reporting(E_ALL);

    $image = imagecreatefromjpeg("certificado.jpg");

    $tileColor = imagecolorallocate($image,0,0,0);
    $gray = imagecolorallocate($image,100,100,100);

    
    $font = realpath("fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf");
    $font1 = realpath("fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf");
    
    imagettftext($image,32,0,320,250,$tileColor, $font ,"CERTIFICADO");
    imagettftext($image,32,0,375,350,$tileColor, $font1 ,"WILLIAM VIEIRA");
    imagestring($image,3,440,370, utf8_decode("CONCLUÍDO EM: ") . date("d/m/Y") , $gray);

    header("Content-type: image/jpeg");

    imagejpeg($image);
    //imagejpeg($image,"certificado-".date("Y-m-d").".jpg",10);

    imagedestroy($image);