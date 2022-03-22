<?php

class Personne {
    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe;
    protected DateTime $_naissance;

/*
"protected" = classe déclaré peut être utilisées par la classe et celles qui en hérite

*/

// CONSTRUCT

    public function __construct(string $nom,string $prenom, string $sexe, string $naissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe; 
        $this->_naissance = new DateTime($naissance);
    }

//GETTER

    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function getSexe() {
        return $this->_sexe;
    }
    public function getNaissance() {
        return $this->_naissance;
    }

// SETTER

    public function setNom(string $NewNom) {
        $this->_nom = $NewNom;
    }
    public function setPrenom(string $NewPrenom) {
        $this->_prenom = $NewPrenom;
    }
    public function setSexe(string $NewSexe) {
        $this->_sexe = $NewSexe;
    }
    public function setNaissance(DateTime $NewNaissance) {
        $this->_date = $NewNaissance;
    }

// STRING

    public function __toString() {
        return $this->_prenom." ".$this->_nom;
    }
}
