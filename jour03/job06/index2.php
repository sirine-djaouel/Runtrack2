<?php



$str = 'this is a test'; 
$i=0;
while($str[$i++]){
  $i++;} 
while($i>0) 
{ 
  echo $str[$i-1]; $i--;
}

?>