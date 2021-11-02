<?php

$str = 'szhn';
$int = 123;
$float = 1.58;
$bool = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2 Jour 1</title>
</head>


<table>
<tbody>


    <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
    </thead>

        <tr>
            <td> <?php echo gettype ($str) ?></td>
            <td> <?php echo 'str' ?></td>
            <td><?php echo $str?></td>
        </tr>

        <tr>
            <td> <?php echo gettype ($int) ?></td>
            <td> <?php echo 'int' ?></td>
            <td><?php echo $int?></td>
        </tr>

        <tr>
            <td> <?php echo gettype ($float) ?></td>
            <td> <?php echo 'float' ?></td>
            <td><?php echo $float?></td>
        </tr>

        <tr>
            <td> <?php echo gettype ($bool) ?></td>
            <td> <?php echo 'bool' ?></td>
            <td><?php echo $bool?></td>
        </tr>
    
</tbody>
</table>
</html>