<?php

$str="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
$x=0;


for($x; isset($str[$x])==true; $x++)
    {
    if($x%2 == 0)
    echo $str[$x];
    }
?>