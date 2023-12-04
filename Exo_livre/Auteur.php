<?php


class Auteur  {
        private string $nom;
        private string $prenom;
        protected array $livres;
// ------------------ GET ET SET DU NOM ----------------------
        public function getNom(): string
        {
                return $this->nom;
        }
        public function setNom(string $nom): self
        {
                $this->nom = $nom;

                return $this;
        }
// ------------------ GET ET SET DU PRENOM ----------------------

        public function getPrenom(): string
        {
                return $this->prenom;
        }
        public function setPrenom(string $prenom): self
        {
                $this->prenom = $prenom;

                return $this;
        }
// ------------------ GET ET SET DES LIVRES ----------------------

        public function getLivres()
        {
                return $this->livres;
        }
        public function setLivres($livres)
        {
                $this->livres = $livres;

                return $this;
        }
// ----------------- CONSTRUCT DE LA CLASS AUTEUR ----------------------        
        public function __construct($nom,$prenom){
            $this -> nom = $nom;
            $this -> prenom = $prenom;
            $this -> livres = [];
        }
// ------------------ METHODE TO STRING --------------------------
        public function __toString(){
            return $this -> nom;
        }
// ----------------- METHODE POUR AJOUTER UN LIVRE A LA BIBLIOGRAPHIE ---------------
        public function addlivre($livre){
            $this -> livres[] = $livre;
        }
// ------------------ METHODE AFFICHER BIBILOGRAPHIE ------------------------
        public function afficherBibliographie(){
            echo $this->prenom . $this->nom . " :<br>";
// ------------------ ON PRECISE QUE LE THIS VIENT DU LIVRE -------------------
            foreach ($this->livres as $livre){
               
                    echo $livre ;
                
            }


        }
       
    }
    
    
