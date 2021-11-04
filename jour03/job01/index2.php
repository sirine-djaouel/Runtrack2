
<?php

$nb = [200, 204, 173, 98, 171, 404, 459];
$i=0;

for($i=0; isset($nb[$i])== true ;$i++)
            {
            if($nb[$i] % 2 == 0)
                    {echo  $nb[$i]. 'est pair'."<br>";}
                else
                {echo  $nb[$i]. ' est impair'."<br>";}
            }
     ?>
 