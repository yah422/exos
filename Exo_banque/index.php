<?php 

require("CompteBancaire.php");
require("Titulaire.php");

$personne1 = new Titulaire("SAIDI", "Asma", "Strasbourg","3","13-06-01");
echo  $personne1 -> afficherInfos();