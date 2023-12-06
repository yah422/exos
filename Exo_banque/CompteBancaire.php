<?php

class CompteBancaire{
    private string $libelle;
    private int $soldeInitial;
    private int $deviseMonetaire;
    private $personne;
    private $solde;


// ------------------ GET ET SET DU LIBELLEE ----------------------

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
// ------------------ GET ET SET DU SOLDE INITIAL ----------------------

    public function getSoldeInitial()
    {
        return $this->soldeInitial;
    }
    public function setSoldeInitial($soldeInitial)
    {
        $this->soldeInitial = $soldeInitial;

        return $this;
    }
// ------------------ GET ET SET DE LA DEVISE MONETAIRE ----------------------

    public function getDeviseMonetaire()
    {
        return $this->deviseMonetaire;
    }
    public function setDeviseMonetaire($deviseMonetaire)
    {
        $this->deviseMonetaire = $deviseMonetaire;

        return $this;
    }
// ------------------ GET ET SET DE LA PERSONNE UNIQUE ----------------------

    public function getPersonne()
    {
        return $this->personne;
    }
    public function setPersonne($personne)
    {
        $this->personne = $personne;

        return $this;
    }

    public function __construct ($libelle, $soldeInitial, $deviseMonetaire, $personne){
        $this -> libelle = $libelle;
        $this -> soldeInitial = $soldeInitial;
        $this -> deviseMonetaire = $deviseMonetaire;
        $this -> personne = $personne;
        $this -> personne -> addCompte($this);
        $this->solde = $soldeInitial;

    
    }
    public function getSolde() {
        return $this->solde;
    }

    public function crediter($montant) {
        $this->solde += $montant;
    }

    public function debiter($montant) {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant.";
        }
    }

    public function effectuerVirement(CompteBancaire $destinataire, $montant) {
        $this->debiter($montant);
        $destinataire->crediter($montant);
    }

 //------------------------- AJOUT DE LA METHODE  __toString ---------------------------------------
    public function __toString() {
    return "Libellé : {$this->libelle},<br> Solde Initial : {$this->soldeInitial},<br> Devise Monétaire : {$this->deviseMonetaire}<br>";
}

    
}

?>
