<?php
$str='chaine de caractere drole et originale';

function leetspeak($chaine)
{
    for($x=0; isset($chaine[$x]); $x++)
    {
        if ($chaine[$x]=='A' || $chaine[$x]=='a')

        {
            $chaine[$x]=4;
        }

        elseif ($chaine[$x]=='B' || $chaine[$x]=='b')
        {
            $chaine[$x]=8;
        }

        elseif ($chaine[$x]=='E' || $chaine[$x]=='e')
        {
            $chaine[$x]=3;
        }

        elseif ($chaine[$x]=='G' || $chaine[$x]=='g')
        {
            $chaine[$x]=6;
        }

        elseif ($chaine[$x]=='L' || $chaine[$x]=='l')
        {
            $chaine[$x]=1;
        }

        elseif ($chaine[$x]=='S' || $chaine[$x]=='s')
        {
            $chaine[$x]=5;
        }

        elseif ($chaine[$x]=='T' || $chaine[$x]=='t')
        {
            $chaine[$x]=7;
        }
    }
    return $chaine;
}


echo (leetspeak($str));



?>