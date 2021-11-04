<?php

$str="Certaines choses changent, et d'autres ne changeront jamais";


for($x=0; isset($str[$x]);$x++)
    {
     
    }
    $str[$x]=$str[0];
for($i=0;isset($str[$i+1]);$i++)
    {
     $str[$i]=$str[$i+1];
     echo $str[$i];
    }
?>