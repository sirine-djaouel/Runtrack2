<?php

$operation = '%';
$a=2;
$b=3;


function calcule($x, $signe, $y)
{
    if ($signe=='*')
    {
        return $x * $y;
    }
    else if ($signe=='+')
    {
        return $x + $y;
    }

    else if ($signe=='-')
    {
        return $x - $y;
    }

    else if ($signe=='/')
    {
        return $x / $y;
    }

    else if ($signe=='%')
    {
        return $x % $y;
    }
}

echo(calcule($a, $operation, $b));

?>