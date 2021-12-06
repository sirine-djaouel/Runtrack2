<?php
$bdd=mysqli_connect("localhost", "root", "", "jour08");

$result = mysqli_query($bdd, "SELECT salles.nom AS nom_salles, etage.nom AS nom_etage FROM salles INNER JOIN etage ON salles.id_etage=etage.id");
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


