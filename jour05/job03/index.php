<?php

$var = gethello(3);



function gethello($var){
    if($var>0)
        echo "Hello La Plateforme";
    else
        return(0);
         
}

echo $var;

?>