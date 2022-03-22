<?php

class Realisateur extends Personne {
    private array $_film;   //déclare un tableau qui va lister les films du réalisateur

    // recupère les variables du parent "Personne"

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance) {
        parent::__construct($nom,$prenom,$sexe,$naissance);
        $this->_film = [];
    }

// GETTER

    // reprend les GETTER de "Personne"

//SETTER

    //reprend les SETTER de "Personne"

// FONCTION FILMOGRAPHIE 

    public function AjouterFilm($NewFilm) {     //fonction pour lister les films dans le tableau
        $this->_film[] = $NewFilm;
    }

    public function AfficherFilmographie() {    //fonction qui va répéter pour chaque film du réalisateur
        foreach ($this->_film as $film) {
            echo $film->getFilmo()."<br>";
        }
    }
}