<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<?php

// Exemple du cours:
// Class Ordinateur{
//     private $_marque;
//     private $_modele;
//     private $_ecran;
//     private $_numero;
//     private $_statut = 0;

//     public function __construct($numero, $marque, $modele, $ecran){
//         $this->_marque = $marque;
//         $this->_modele = $modele;
//         $this->_ecran = $ecran;
//         $this->_numero= $numero;

//     }

//     public function allumer(){
//     $this->_statut = 1;
//     }

//     public function __toString(){
//         return "<br>Numero: ".$this->_numero ."<br>Marque: ".$this->_marque . "<br>Modèle: ".  $this->_modele . "<br>Écran: ". $this->_ecran . " <br>";
//     }


// }
// $poste = new Ordinateur("ordinateur 0","Asus", "Pavillion", 14);
// $poste2 = new Ordinateur("ordinateur 1","Acer", "DL33", 15);
// $poste->allumer();

// echo $poste;
// echo $poste2;

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

    public function getcalculerAge() {
        $dateActuelle = new DateTime();
        $dateNaissance = new DateTime($this->dateNaissance);
        $difference = $dateNaissance->diff($dateActuelle);
        return $difference->y;
    }

    public function getaffichage() {
        $age = $this->getcalculerAge();
        echo "$this->prenom $this->nom a $age ans <br>";
        echo "\n";
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

$p1->getaffichage();
$p2->getaffichage();

?>

</body>
</html>