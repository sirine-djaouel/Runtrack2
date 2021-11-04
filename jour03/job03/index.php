<?php

$str="I'm sorry Dave I'm afraid I can't do that";


for($x=0; isset($str[$x]);$x++)
    {
    if($str[$x]=="a"||$str[$x]=="e"||$str[$x]=="i"||$str[$x]=="o"||$str[$x]=="u"||$str[$x]=="y"||$str[$x]=="I")
    echo $str[$x];
    }
?>