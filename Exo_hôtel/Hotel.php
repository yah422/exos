<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hôtel </title>
</head>
<body>
    <?php

// --------------- création de la class hotel --------------------
    class Hotel {
        private string $nomHotel;
        private string $adresse;
        private int $nbreChambre;
        private int $nbreChambreReserve;
        private int $nbreChambreDispo;

//--------------- get et set du nomHotel ----------------------
        public function getNomHotel(): string
        {
                return $this->nomHotel;
        }
        public function setNomHotel(string $nomHotel): self
        {
                $this->nomHotel = $nomHotel;

                return $this;
        }
//--------------- get et set du adresse ----------------------
        public function getAdresse(): string
        {
                return $this->adresse;
        }
        public function setAdresse(string $adresse): self
        {
                $this->adresse = $adresse;

                return $this;
        }
//--------------- get et set du nbreChambre ----------------------
        public function getNbreChambre(): int
        {
                return $this->nbreChambre;
        }
        public function setNbreChambre(int $nbreChambre): self
        {
                $this->nbreChambre = $nbreChambre;

                return $this;
        }
//--------------- get et set du nbreChambreReserve ----------------------
        public function getNbreChambreReserve(): int
        {
                return $this->nbreChambreReserve;
        }
        function setNbreChambreReserve(int $nbreChambreReserve): self
        {
                $this->nbreChambreReserve = $nbreChambreReserve;

                return $this;
        }
//--------------- get et set du nbreChambreDispo ----------------------
        public function getNbreChambreDispo(): int
        {
                return $this->nbreChambreDispo;
        }
        public function setNbreChambreDispo(int $nbreChambreDispo): self
        {
                $this->nbreChambreDispo = $nbreChambreDispo;

                return $this;
        }


//--------------- création de la function construct ----------------------
        public function __construct($nomHotel,$adresse,$nbreChambre,$nbreChambreReserve,$nbreChambreDispo){
            $this-> nomHotel = $nomHotel;
            $this-> adresse = $adresse;
            $this-> nbreChambre = $nbreChambre;
            $this-> nbreChambreReserve = $nbreChambreReserve;
            $this-> nbreChambreDispo = $nbreChambreDispo;
        }
//------------------------- AJOUT DE LA METHODE  __toString ---------------------------------------
        public function __toString() {
            return "{$this-> nomHotel} \n <br> {$this-> adresse} \n <br> Nombre de chambres: {$this-> nbreChambre} \n <br> Nombre de chambres réservées: {$this-> nbreChambreReserve} \n <br> Nombre de chambres disponible: {$this-> nbreChambreDispo} \n <br>";
    }
//----------------------- fonction afficherInfos ----------------------------
    public function afficherInfos(){
        echo "{$this-> nomHotel} \n <br> {$this-> adresse} \n <br> Nombre de chambres: {$this-> nbreChambre} \n <br> Nombre de chambres réservées: {$this-> nbreChambreReserve} \n <br> Nombre de chambres disponible: {$this-> nbreChambreDispo} \n <br>";

    } 
    }



    ?>
</body>
</html>