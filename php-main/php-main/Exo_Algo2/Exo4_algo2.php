<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exo4 - Algo2 </title>

    <link rel="stylesheet" href="Exo4_algo2.css">
</head>
<body>

<?php
$capitales = array("France" => "Paris","Allemagne" => "Berlin","USA" => "Washington","Italie" => "Rome","Espagne" => "Madrid");

asort($capitales);

?>
<table border="0">
    <tr>
        <th>Pays</th>
        <th>Capitale</th>
        <th>Liens</th>
    </tr>

    <?php
    foreach ($capitales as $pays => $capitale) {
        $liens = "https://fr.wikipedia.org/wiki/" . urlencode($capitale);
        
        echo "<tr>";
        echo "<td>$pays</td>";
        echo "<td>$capitale</td>";
        echo "<td><a href=\"$liens\" target=\"_blank\"> liens </a></td>";
        echo "</tr>";
    }

    ?>
</table>

</body>
</html>
