<?php
$bdd=mysqli_connect("localhost", "root", "", "jour08");

$result = mysqli_query($bdd,"SELECT * FROM salles ORDER BY capacite DESC");
$table= mysqli_fetch_all($result, MYSQLI_ASSOC);


echo "<table border='1'>";
echo "<tr>";
foreach ($table[0] as $key => $val)
    {
        echo '<th>'. $key .'</th>';
    }
echo "</tr>";


foreach ($table as $key => $val)
    {   echo "<tr>";

        foreach ($val as $key1 => $val1)
        {
            echo '<td>'. $val1 .'</td>';
        }
        

        echo "</tr>";
    }

echo "</table>";
mysqli_close($bdd);
?>

