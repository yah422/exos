<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2 - Algo2</title>

    <link rel="stylesheet" href="Exo2_algo2.css">
</head>
<body>

<?php

function afficherTableHTML($capitales) {
   
    ksort($capitales);
    
    echo "<table border='1'>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
            </tr>";

    foreach ($capitales as $pays => $capitale) {
        echo "<tr>
                <td>" . strtoupper($pays) . "</td>
                <td>$capitale</td>
              </tr>";
    }

    
    echo "</table>";
}

$capitales = array("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome");

afficherTableHTML($capitales);
?>
</body>
</html>