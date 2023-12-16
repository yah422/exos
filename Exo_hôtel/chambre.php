<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Chambre-Hôtel </title>
</head>
<body>
    <?php
//-------------- Création de la class Chambre ----------------
    class Chambre{
        private string $wifi;
        private string $etat;
        private int $prix;
        private int $numeroChambre;
        private string $nbreLit;
      
//--------------- get et set du wifi ----------------------
        public function getWifi(): string
        {
                return $this->wifi;
        }
        public function setWifi(string $wifi): self
        {
                $this->wifi = $wifi;

                return $this;
        }

//--------------- get et set du etat ----------------------
        public function getEtat(): string
        {
                return $this->etat;
        }
        public function setEtat(string $etat): self
        {
                $this->etat = $etat;

                return $this;
        }

//--------------- get et set du prix ----------------------
        public function getPrix(): int
        {
                return $this->prix;
        }
        public function setPrix(int $prix): self
        {
                $this->prix = $prix;

                return $this;
        }

//--------------- get et set du numeroChambre ----------------------
        public function getNumeroChambre(): string
        {
                return $this->numeroChambre;
        }
        public function setNumeroChambre(string $numeroChambre): self
        {
                $this->numeroChambre = $numeroChambre;

                return $this;
        }

//--------------- get et set du nbreLit ----------------------
        public function getNbreLit(): string
        {
                return $this->nbreLit;
        }
        public function setNbreLit(string $nbreLit): self
        {
                $this->nbreLit = $nbreLit;

                return $this;
        }
//------------- Création de la function construct ---------------------
        public function __construct($wifi,$prix,$nbreLit,$numeroChambre,$etat){
            $this-> wifi = $wifi;
            $this-> prix = $prix;
            $this-> nbreLit = $nbreLit;
            $this-> numeroChambre = $numeroChambre;
            $this-> etat = $etat;
        }
    }

    ?>
</body>
</html>