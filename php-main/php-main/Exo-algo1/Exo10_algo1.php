<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Exercice 10
// Variables de départ :
$montant_a_payer = 152;
$montant_verse = 200;
$reste_a_payer = $montant_verse - $montant_a_payer;
// Variable du rendue de monnaie :
echo "Montant à payer : ". $montant_a_payer;
echo "\n";
echo "Montant versé : ". $montant_verse;
echo "\n";
echo "Reste à payer : ". $reste_a_payer;
echo"\n";
$nbre_de_10 = intval($reste_a_payer / 10);
$reste_a_payer = $reste_a_payer % 10;
$nbre_de_5 = intval($reste_a_payer / 5);
$reste_a_payer = $reste_a_payer % 5;
$nbre_de_2 = intval($reste_a_payer / 2);
$reste_a_payer = $reste_a_payer % 2;
$nbre_de_1 = $reste_a_payer;
// Affichage :

echo"*************************************";
echo "\n";
echo "Rendue de monnaie : ";
echo "\n";
echo $nbre_de_10 . " billets de 10 euros -  ". $nbre_de_5 . " billet de 5 euros  -  " . $nbre_de_2 . " pièces de 2 euros -  ".$nbre_de_1 . " pièces de 1 euros ";



    ?>
</body>
</html>