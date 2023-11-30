<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// Exercice 1
$count = strlen("Notre formation DL commence aujourd'hui");
echo "La phrase << Notre formation DL commence aujourd’hui >> contient " . $count . " caractères";

// Exerice 2
$word= str_word_count(" Notre formation DL commence aujourd'hui");
echo "La phrase << Notre formation DL commence aujourd’hui >> contient " . $word . " mots. ";

// Exercice 3
echo "Notre formation DL commence aujourd'hui \n" ;
$replaced = str_replace("aujourd'hui", " demain " , "Notre formation DL commence aujourd'hui");
echo $replaced

// Exerice 4
$palindrome = "engagelejeuquejelegagne";
$reverse = strrev($palindrome);

echo $reverse . "\n"; 
echo $palindrome . "\n"; 
if ($reverse == $palindrome){
	echo "\nLa phrase << Engage le jeu que je le gagne >> est palindrome";
}

// Exercice 5
$valeur_franc = 100;
$valeur_euro = $valeur_franc/6.55957;
echo "Montant en franc : " . $valeur_franc;
echo "\n";
echo $valeur_franc . " francs = " . round($valeur_euro,2);

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

// Exercice 7
$agekids = 10;
if ($agekids == "6" or $agekids =="7" ){
	echo "L'enfant qui a " . $agekids . " ans appartient à la catégorie << Poussin >> ";
} 

elseif ($agekids == "8" or $agekids == "9"){
	echo  "L'enfant qui a " . $agekids . " ans appartient à la catégorie << Pupille >> ";}

elseif ($agekids == "10" or $agekids == "11" ){
	echo "L'enfant qui a " . $agekids . " ans appartient à la catégorie << Minime >> ";}

elseif ($agekids >="12"){
	echo "L'enfant qui a " . $agekids . " ans appartient à la catégorie << Cadet >> ";}
else{
	echo "La categorie n'est pas gérée";}

// Exercice 8
//-------------BOUCLE WHILE-------------
$x = 8;
$r = 10;

echo "\n\n La table de multiplication \n\n";

$i = 1;
while ($i <= $r) 
{
    echo  $x, " * ", $i, " = ", $x * $i, "\n";
    $i++;
}

// ---------- BOUCLE FOR --------------
$x = 1;
$r = 8;
for ($x = 1; $x <= 10; $x++) 
{
	echo $x . " * ". $r . " = ". $x * $r. "\n";
}

// Exercice 9


?>
</body>
</html>

