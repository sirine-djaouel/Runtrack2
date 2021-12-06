<?php
$bdd=mysqli_connect("localhost", "root", "", "jour08");

$result = mysqli_query($bdd,"SELECT * FROM etudiants");

echo "<table border='1'>
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Date de Naissance</th>
<th>Sexe</th>
<th>email</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['prenom'] . "</td>";
echo "<td>" . $row['naissance'] . "</td>";
echo "<td>" . $row['sexe'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($bdd);
?>

