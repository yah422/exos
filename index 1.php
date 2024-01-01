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
$age = 32;
$sexe = "F";
echo "Age : ". $age;
echo "\n";
echo "Sexe : ". $sexe;
echo "\n";
if ($age<18 and $sexe == "F")
{
	echo "non imposable";}
elseif ($age >= 18 or $age<= 35 and $sexe== "F")
{
	echo "La personne est imposable";
}
elseif ($age > 20 and $sexe == "M")
{
	echo "La personne est imposable";
}
else {
	echo "Non imposable";
}

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


// Exercice 11
$marque_de_voiture = array("Peugeot", "Renault", "BMW", "Mercedes");
$nbre_de_voiture = array_count_values($marque_de_voiture);

echo "Il y a ". count($nbre_de_voiture) . " marques de voitures dans le tableau : ";
echo "\n";

foreach ($marque_de_voiture as $marques) 
{
	echo "- $marques \n";
}

// Exercice 12
function SaluerParLangue($prenom, $langue) 
{
    switch ($langue) 
    {
        case 'francais':
            return "Salut $prenom";
        case 'anglais':
            return "Hello $prenom";
        case 'espagnol':
            return "Hola $prenom";
        default:
            return "Bonjour $prenom";
    }
}

$tableau = array("Mickaël" => "francais", "Virgile" => "espagnol", "Marie-Claire" => "anglais");

ksort($tableau);

foreach ($tableau as $prenom => $langue) {
    echo SaluerParLangue($prenom, $langue) . "\n";
}

//Exercice 13
$tableauDeNotes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);

$moyenneNotes = array_sum($tableauDeNotes) / count($tableauDeNotes);

echo "Les notes obtenues par l'élève sont : " . implode(" ", $tableauDeNotes) . "\n";
echo "Sa moyenne générale est donc de : " . round($moyenneNotes, 2);

// Exercice 14
$DateDeNaissance = "1985-01-17";
$DateDeNaissanceObjet = new DateTime($DateDeNaissance);
$DateActuelle = new DateTime("2018-05-21");
$difference = $DateDeNaissanceObjet -> diff($DateActuelle) ;
echo "Age de la personne : " . $difference ->y . " ans, " . $difference -> m . " mois et " . $difference -> d . " jours.";

// Exercice 15
class Personne 
{
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function calculerAge() {
        $dateActuelle = new DateTime();
        $dateNaissance = new DateTime($this->dateNaissance);
        $difference = $dateNaissance->diff($dateActuelle);
        return $difference->y;
    }

    public function afficher() {
        $age = $this->calculerAge();
        echo "$this->prenom $this->nom a $age ans\n";
        echo "\n";
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

$p1->afficher();
$p2->afficher();

?>
</body>
</html>