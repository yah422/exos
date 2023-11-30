<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Exercice 11
$marque_de_voiture = array("Peugeot", "Renault", "BMW", "Mercedes");
$nbre_de_voiture = array_count_values($marque_de_voiture);

echo "Il y a ". count($nbre_de_voiture) . " marques de voitures dans le tableau : ";
echo "\n";

foreach ($marque_de_voiture as $marques) 
{
	echo "- $marques \n";
}

?>
</body>
</html>