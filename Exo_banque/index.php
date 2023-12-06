<?php

require("CompteBancaire.php");
require("Titulaire.php");

$personne1 = new Titulaire("SAIDI", "Asma", "Strasbourg", "13/06/01");

$compte1 = new CompteBancaire("Compte Courant", 1000, 1, $personne1);
$compte2 = new CompteBancaire("Livret A", 500, 1, $personne1);



echo $personne1->afficherInfos();
echo "\n";



?>

