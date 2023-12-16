<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Client-Hôtel </title>
</head>
<body>
    <?php
//-------------------- Création de la class Client ---------------------------

    class Client{
        private string $nom;
        private string $prenom;
        private string $adresse;
        private string $numTel;

//-------------------- Get et set de nom ---------------------------
        public function getNom(): string
        {
                return $this->nom;
        }
        public function setNom(string $nom): self
        {
                $this->nom = $nom;

                return $this;
        }

//-------------------- Get et set de prenom ---------------------------
        public function getPrenom(): string
        {
                return $this->prenom;
        }
        public function setPrenom(string $prenom): self
        {
                $this->prenom = $prenom;

                return $this;
        }

//-------------------- Get et set de adresse ---------------------------
        public function getAdresse(): string
        {
                return $this->adresse;
        }
        public function setAdresse(string $adresse): self
        {
                $this->adresse = $adresse;

                return $this;
        }

//-------------------- Get et set de numTel ---------------------------
        public function getNumTel(): string
        {
                return $this->numTel;
        }
        public function setNumTel(string $numTel): self
        {
                $this->numTel = $numTel;

                return $this;
        }
//------------------- Création de la function construct -----------------
        public function __construct($nom,$prenom,$adresse,$numTel){
            $this-> nom = $nom;
            $this-> prenom = $prenom;
            $this-> adresse = $adresse;
            $this-> numTel = $numTel;
        }
    }

    ?>
</body>
</html>