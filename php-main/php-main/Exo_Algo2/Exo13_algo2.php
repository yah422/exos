<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo13 - Algo2</title>
</head>
<body>
<?php
// -------------- CLASS ----------------- 
 class Voiture {
     private $marque;
     private $modele;
     private $nbPortes;
     private $vitesseActuelle;
     private $ralentir;
  
     public function __construct($marque, $modele, $nbPortes) {
         $this->marque = $marque;
         $this->modele = $modele;
         $this->nbPortes = $nbPortes;
         $this->vitesseActuelle = 0;
         $this ->ralentir =$ralentir;
     }
  // ------------- METHOD 1 -----------------

     public function getdemarrer() {
         echo "La voiture démarre.<br>";
     }
// ------------- METHOD 2 -----------------

     public function getaccelerer() {
         $this->vitesseActuelle += 50;
         echo "La voiture accélère.<br> Vitesse actuelle : {$this->vitesseActuelle} km/h <br> <br>";
     }
// ------------- METHOD 3 -----------------

     public function getstopper() {
         $this->vitesseActuelle = 0;
         echo "La voiture s'arrête.<br> <br>";
     }
// ------------- METHOD 4 -----------------

     public function getralentir(){
        $this ->ralentir;
     }
// ------------ AFFICHER INFORMATIONS -------------
     public function afficherInformations() {
            echo "Marque: $this->marque  <br> Modèle: $this->modele  <br> Portes: $this->nbPortes <br> Vitesse: $this->vitesseActuelle km/h <br> <br>";
             }
 }
  
$v1 = new Voiture("Peugeot", "408", 5);
 $v1->afficherInformations();
 $v1->demarrer();
 $v1->accelerer(); 

$v2 = new Voiture("Citroën", "C4", 3);
 $v2->afficherInformations();
 $v2->demarrer();
 $v2->accelerer();
 $v2->stopper();
 ?>
</body>
</html>
