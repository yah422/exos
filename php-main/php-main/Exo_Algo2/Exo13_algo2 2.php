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
   private string $marque;
   private string $modele;
   private string $nbPortes;
   private int $vitesseActuelle;
   private bool $estAllumee=false;

    
   public function getMarque():string{
      return $this -> marque;
   }
   public function setMarque(string $marque) {
      $this -> marque = $marque;
   }

   public function getModele():string {
      return $this -> modele;
   }
   public function setModele(string $modele){
      $this -> modele = $modele;
   }

   public function getnbPortes():string {
     return $this -> nbPortes;
   }
   public function setnbPorte(string $nbPortes){
      $this -> nbPortes = $nbPortes;
   }

   public function getvitesseActuelle():int {
      return $this -> vitesseActuelle;
   }
   public function setvitesseActuelle(int $vitesseActuelle){
     $this -> vitesseActuelle = $vitesseActuelle;
   }

  
   public function getEstAllumee(){
      return $this->estAllumee;
   }

   public function setEstAllumee($estAllumee){
      $this->estAllumee = $estAllumee;

      return $this;
   }
 
   
     public function __construct(string $marque, string $modele, string $nbPortes ) {
         $this->marque = $marque;
         $this->modele = $modele;
         $this->nbPortes = $nbPortes;
         $this->vitesseActuelle = 0;
     }
  // ------------- METHOD 1 -----------------

     public function demarrer() {
      $this->estAllumee=true;
      echo "Le véhicule  {$this->marque} {$this->modele} démarre <br>";
     }
// ------------- METHOD 2 -----------------

     public function accelerer($vitesse) {
        if ($this ->estAllumee = false){
           echo "Pour accélérer, il faut démarrer le véhicule {$this->marque} {$this->modele} " ;
         } else {
            $this->vitesseActuelle += $vitesse;
            echo "Le véhicule {$this->marque} {$this->modele} veut accélérer de " . $vitesse ." km/h. "."<br> Vitesse actuelle : {$this->vitesseActuelle} km/h <br> <br>";}
      }
// ------------- METHOD 3 -----------------

     public function stopper() {
         $this->vitesseActuelle = 0;
         $this ->estAllumee = false;
         echo "Le véhicule {$this->marque} {$this->modele} s'arrête car elle n'a pas été démarrer ! <br> <br>";
     }
// ------------- METHOD 4 -----------------

   public function ralentir($vitesse){
      if ($this ->estAllumee = false){
         echo "Il faut démarrer la voiture ! <br>";
      } else{
         $this->vitesseActuelle -= $vitesse;
         if ($this->vitesseActuelle < 0){
            $this->vitesseActuelle = 0;
         }
         echo "Le véhicule {$this->marque} {$this->modele} veut ralentir de ". $vitesse . "km/h <br>";}
   }
// ------------ AFFICHER INFORMATIONS -------------
   public function afficherInformations() {
         echo "Marque: $this->marque  <br> Modèle: $this->modele  <br> Portes: $this->nbPortes <br> Vitesse: $this->vitesseActuelle km/h <br> <br>";
   }

} 
$v1 = new Voiture("Peugeot", "408", 5);
$v1->demarrer();
$v1->accelerer(20); 
$v1->ralentir(40);
$v1->afficherInformations();

$v2 = new Voiture("Citroën", "C4", 3);
 $v2->afficherInformations();
 $v2->demarrer();
 $v2->accelerer(50);
 $v2->stopper();
 ?>
</body>
</html>
