<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Exercice 14
$DateDeNaissance = "1985-01-17";
$DateDeNaissanceObjet = new DateTime($DateDeNaissance);
$DateActuelle = new DateTime("2018-05-21");
$difference = $DateDeNaissanceObjet -> diff($DateActuelle) ;
echo "Age de la personne : " . $difference ->y . " ans, " . $difference -> m . " mois et " . $difference -> d . " jours.";


?>
</body>
</html>