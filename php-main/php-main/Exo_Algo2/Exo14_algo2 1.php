<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exo14 - Algo2</title>
</head>
<body>
    <?php
    class Voiture {
        protected string $marque;
        protected string $modele;
       
        public function getMarque()
        {
                return $this->marque;
        }
 
        public function setMarque($marque)
        {
                $this->marque = $marque;

                return $this;
        }

        public function getModele()
        {
                return $this->modele;
        }

        public function setModele($modele)
        {
                $this->modele = $modele;

                return $this;
        }
      
        public function getInfos(){
            echo "Marque: $this->marque  <br> Modèle: $this->modele  <br> ";

        }

        public function __construct($marque,$modele ) {
                $this->marque = $marque;
                $this->modele = $modele;
    }
     
    }


    class VoitureElec extends Voiture {
        private string $autonomie;


        public function __construct($marque,$modele,$autonomie){
            parent::__construct($marque,$modele);
            $this->autonomie = $autonomie;
            }
        
        public function getInfos(){
            echo parent::getInfos()." Autonomie : ".$this->autonomie." <br> <br>";
        }
       
        public function getAutonomie()
        {
                return $this->autonomie;
        }

        public function setAutonomie($autonomie)
        {
                $this->autonomie = $autonomie;

                return $this;
        }
   
}

   
     $v1 = new Voiture("Peugeot","408");
     $ve1 = new VoitureElec("BMW","I3",100);
     echo $v1->getInfos() . "<br>";
     echo "------------------------------------------------------ <br>";
     echo "<br>";
     echo $ve1->getInfos() . "<br>";
     
    ?>
</body>
</html>