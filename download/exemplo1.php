<?php

    $link = "https://mplansistemas.com.br/site/wp-content/uploads/2018/08/logo-mplan-horizontal-1.png";

    $content = file_get_contents($link);

    $parse = parse_url($link);

    $basename = basename($parse["path"]);

    $file = fopen($basename, "w+");

    fwrite($file,$content);

    fclose($file);

    ?>

    <img src="<?=$basename?>">


