<?php
$str='Vous m avez fait transpirer, pas cool';
$char='o';

function occurences($phrase,$lettre)
{
    $nb=0;
    for($x=0; isset($phrase[$x]); $x++)
    {
        if ($phrase[$x]==$lettre)
        {
            $nb++;
        }
    }

return $nb;
}
echo (occurences($str,$char));
?>

