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
        private string $numChambre;
        private string $dateDuree;

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

//-------------------- Get et set de numChambre ---------------------------
        public function getNumChambre(): string
        {
                return $this->numChambre;
        }
        public function setNumChambre(string $numChambre): self
        {
                $this->numChambre = $numChambre;

                return $this;
        }

//-------------------- Get et set de dateEntree ---------------------------
        public function getDateEntree(): string
        {
                return $this->dateEntree;
        }
        public function setDateEntree(string $dateEntree): self
        {
                $this->dateEntree = $dateEntree;

                return $this;
        }
//-------------------- Get et set de dateSortie ---------------------------
        public function getDateSortie(): string
        {
                return $this->dateSortie;
        }
        public function setDateSortie(string $dateSortie): self
        {
                $this->dateSortie = $dateSortie;

                return $this;
        }

//------------------- Création de la function construct -----------------
        public function __construct($nom,$prenom,$numChambre,$dateEntree,$dateSortie){
            $this-> nom = $nom;
            $this-> prenom = $prenom;
            $this-> numChambre = $numChambre;
            $this-> dateEntree = $dateEntree;
            $this-> dateSortie = $dateSortie;
        }

//----------------------- fonction afficherInfos ----------------------------
        public function afficherInformation(){
            echo "{$this-> nom} {$this-> prenom} - Chambre {$this-> numChambre} - du {$this->dateEntree} au {$this-> dateSortie}";
        } 

        
    }

    ?>
</body>
</html>