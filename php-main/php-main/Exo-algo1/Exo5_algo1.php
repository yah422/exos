<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Exercice 5
$valeur_franc = 100;
$valeur_euro = $valeur_franc/6.55957;
echo "Montant en franc : " . $valeur_franc;
echo "\n";
echo $valeur_franc . " francs = " . round($valeur_euro,2);

    ?>
</body>
</html>