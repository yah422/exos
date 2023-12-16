<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Réservation-hôtel </title>
</head>
<body>
    <?php
//-------------- création de la class réservation ----------------------
    class Reservation{
        private string $nomClient;
        private string $prenomClient;
        private string $dateEntree;
        private string $dateSortie;
        private int $numeroChambre;

//--------------- get et set du nomClient ----------------------
        public function getNomClient(): string
        {
                return $this->nomClient;
        }
        public function setNomClient(string $nomClient): self
        {
                $this->nomClient = $nomClient;

                return $this;
        }
//--------------- get et set du prenomClient ----------------------
        public function getPrenomClient(): string
        {
                return $this->prenomClient;
        }
        public function setPrenomClient(string $prenomClient): self
        {
                $this->prenomClient = $prenomClient;

                return $this;
        }
//--------------- get et set du dateEntree ----------------------
        public function getDateEntree(): string
        {
                return $this->dateEntree;
        }
        public function setDateEntree(string $dateEntree): self
        {
                $this->dateEntree = $dateEntree;

                return $this;
        }
//--------------- get et set du dateSortie ----------------------
        public function getDateSortie(): string
        {
                return $this->dateSortie;
        }
        public function setDateSortie(string $dateSortie): self
        {
                $this->dateSortie = $dateSortie;

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
//--------------- création de la function construct ----------------------
        public function __construct($nomClient,$prenomClient,$dateEntree,$dateSortie,$numeroChambre){
            $this-> nomClient = $nomClient;
            $this-> prenomClient = $prenomClient;
            $this-> dateEntree = $dateEntree;
            $this-> numeroChambre = $numeroChambre;
        }

//--------------------               ---------------------------

    }

    ?>
</body>
</html>