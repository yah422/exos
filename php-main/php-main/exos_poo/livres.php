<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Livres - POO </title>
</head>
<body>
    <?php
    
    class Livres{
        private string $titre;
        private string $nbreDePages;
        private string $parution;
        private int $prix;
        private string $auteur;


        public function __construct($titre,$nbreDePages,$parution,$prix,$auteur){
            $this -> titre = $titre;
            $this -> nbreDePages = $nbreDePages;
            $this -> parution = $parution;
            $this -> prix = $prix;
            $this -> auteur = $auteur;
        }

   
        public function getTitre(): string
        {
                return $this->titre;
        }
        public function setTitre(string $titre): self
        {
                $this->titre = $titre;

                return $this;
        }

        public function getNbreDePages(): string
        {
                return $this->nbreDePages;
        }
        public function setNbreDePages(string $nbreDePages): self
        {
                $this->nbreDePages = $nbreDePages;

                return $this;
        }

        public function getParution(): string
        {
                return $this->parution;
        }
        public function setParution(string $parution): self
        {
                $this->parution = $parution;

                return $this;
        }

        public function getPrix(): int
        {
                return $this->prix;
        }
        public function setPrix(int $prix): self
        {
                $this->prix = $prix;

                return $this;
        }

       
        public function getAuteur(): string
        {
                return $this->auteur;
        }
        public function setAuteur(string $auteur): self
        {
                $this->auteur = $auteur;

                return $this;
        }

        public function __toString(){
            return ;
        }

        public function afficherBibliographie(){

        }


    }

    class Auteur extends Livres {
        private string $nom;
        private string $prenom;

        public function __construct(){
            $this -> nom = $nom;
            $this -> prénom = $prenom;
        }

        public function getNom(): string
        {
                return $this->nom;
        }
        public function setNom(string $nom): self
        {
                $this->nom = $nom;

                return $this;
        }

        public function getPrenom(): string
        {
                return $this->prenom;
        }
        public function setPrenom(string $prenom): self
        {
                $this->prenom = $prenom;

                return $this;
        }
        
        public function __toString(){
            return ;
        }


    }



    ?>
</body>
</html>