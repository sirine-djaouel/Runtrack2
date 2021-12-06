<?php

$bdd=mysqli_connect("localhost", "root", "", "jour08");
$req= mysqli_query($bdd,"SELECT * FROM salles");
$res=mysqli_fetch_array($req, MYSQLI_ASSOC);
var_dump($res);
?>

<h1>Tableau</h1>
<table>
    <thead>

        <?php
            echo '<tr>';
        foreach ($res[0] as $key => $value)
        {
            echo "<th>$key</th>";

        }
        echo '</tr>';
        ?>

    </thead>

<tbody>
    <tr>
        <?php
        foreach($res as $key=>$value)
        {
            echo '<tr>';
            foreach($value as $key1 => $value1)
            {
                echo "<td>$value1</td>";
            }
            echo '</tr>';
        }
        ?>
    </tr>
</tbody>
</table>












</table>

?>