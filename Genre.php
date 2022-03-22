<?php

class Genre {
    private string $_genre;
    private array $_liste;

// CONSTRUCT

    public function __construct(string $genre) {
        $this->_genre = $genre;
        $this->_liste =[];
    }

// GETTER

    public function getGenre() {
        return $this->_genre;
    }

// SETTER

    public function setGenre(string $NewGenre) {
        $this->_genre = $NewGenre;
    }

// FONCTIONS

    // FONCTION LISTE GENRE 

public function AjouterListe($NewListe) {     //fonction pour lister les films dans le tableau
    $this->_liste[] = $NewListe;
}

public function AfficherListeGenre() {    //fonction qui va répéter pour chaque film du réalisateur
    foreach ($this->_liste as $liste) {
        echo "-".$liste->getInfo()."<br>";//affichera que les variables transmise dans getInfo
    }
}   

// STRING 

    public function __toString() {
        return $this->_genre ;
    }
}