<?php

class Acteur extends Personne {

    private array $_casting;

    // recupère les variables du parent "Personne"

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance) {
        parent::__construct($nom,$prenom,$sexe,$naissance);
        $this->_casting = [];
    }


// GETTER

    public function getDate() {
        return $this->_naissance;
    }
    // reprend les GETTER de "Personne"

//SETTER

    //reprend les SETTER de "Personne"   
    
// FONCTION

    public function AddCasting($NewCasting) {
        $this->_casting[] = $NewCasting;
    }

    public function afficherFilmographie() {
        $result = "<h2>Filmographie de ".$this->getPrenom()." ".$this->getNom()."</h2>";
        foreach ($this->_casting as $casting) {
            $result .= $casting->getFilm()." dans le rôle de : ".$casting->getRole()."<br>";
        }
        return $result;
    }
    
}

// $a .= $b	$a = $a . $b	Concaténation d'une chaîne de caractères