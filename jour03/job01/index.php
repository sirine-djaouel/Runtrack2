                                                            <?php

$nb = [200, 204, 173, 98, 171, 404, 459];
$i=0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2 Jour 2 - Job1</title>
</head>
<table>
    <tbody>
    <?php 
    for($i=0; isset($nb[$i])== true ;$i++)
            {
            if($nb[$i] % 2 == 0)
                {echo ' <tr> 
                            <td>'. $nb[$i]. ' est pair </td>
                        </tr>';}
            else
                {echo ' <tr> 
                            <td>'. $nb[$i]. ' est impair </td> 
                        </tr>';}
            }
     ?>
    </tbody>
</table>
</html>