<?php

class Titulaire{
    private string $nom;
    private string $prenom;
    private string $ville;
    private string $toutlescomptes;
    private string $dateNaissance;
    private array $comptes;

    public function __construct($nom,$prenom,$ville,$dateNaissance){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> ville = $ville;
        $this -> dateNaissance = $dateNaissance;
        $this -> comptes = [];
        
    }


    public function getcalculerAge() {
        $dateActuelle = new DateTime();
        $dateNaissance = new DateTime($this->dateNaissance);
        $difference = $dateNaissance->diff($dateActuelle);
        return $difference->y;
    }

// ------------------ GET ET SET DU NOM ----------------------
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
// ------------------ GET ET SET DU PRENOM ----------------------
    
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
// ------------------ GET ET SET DE LA VILLE ----------------------
    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

// ------------------ GET ET SET DE LA DATE DE NAISSANCE ----------------------
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    } 
// ------------------------- METHODE ADDCOMPTE ---------------------
    public function addCompte($compte){
        $this -> comptes[] = $compte;

    }
    
    public function afficherInfos(){
        echo "Nom : $this->nom <br> Prénom : $this->prenom <br> Ville : $this->ville  <br> Date de naissance : $this->dateNaissance <br>";
        echo "Liste des comptes : <br>";
            foreach ($this->comptes as $compte) {
                echo "- $compte <br>";
            }
    } 
    
}