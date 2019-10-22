<?php

function teste($callback){
    #processo lento
    //processo lento
    $callback();

}


teste(function(){
    echo "Terminou";
});


?>
