<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Exercice 6
$prix_unitaire = 9.99;
$quantity = 5;
$taux_tva = 0.2;
$prix_total_sans_tva = $prix_unitaire*$quantity;
$prix_total_avec_tva = $prix_total_sans_tva*$taux_tva;
$prix_total = $prix_total_sans_tva + $prix_total_avec_tva;
echo "Prix unitaire de l'article : " . $prix_unitaire . " euros.";
echo "\n";
echo "Quantité : " . $quantity;
echo "\n";
echo "Taux de TVA : " . $taux_tva;
echo "\n";
echo "Le montant de la facture à régler est de : " . $prix_total . " euros.";

    ?>
</body>
</html>