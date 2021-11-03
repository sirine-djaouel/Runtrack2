<?php

//Les nombres premiers sont des entiers naturels divisable uniquement par eux-même ou par 2
// ils ont donc 2 diviseurs : 1 et eux-même

for($i=2; $i<=1000; $i++){
 

    for($j=1; $j<=$i; $j++){
        $x=0;

        if($i%$j==0){
            $x++;
        }
           
       
    }

        if($x==2){
            echo $i."<br>";
        }
        

}

?>