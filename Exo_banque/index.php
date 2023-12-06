<?php

require("CompteBancaire.php");
require("Titulaire.php");

$personne1 = new Titulaire("SAIDI", "Asma", "Strasbourg", "2", "13/06/01");

$compte1 = new CompteBancaire("Compte Courant", 1000, 1, $personne1);
$compte2 = new CompteBancaire("Livret A", 500, 1, $personne1);

$personne1->addCompte($compte1);
$personne1->addCompte($compte2);

echo $personne1->afficherInfos();
echo "\n";

echo $compte1->__toString();
echo "\n";
echo $compte2->__toString();

?>

