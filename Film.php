<?php

class Film {
    private string $_titre;
    private DateTime $_date;
    private int $_duree;                    // valeur integer (en minutes)
    private Realisateur $_realisateur;      //relie à la classe "réalisateur"
    private Genre $_genre;                  //relie à la classe "genre"
    private array $_casting;
    private string $_resume;

    public function __construct(string $titre, string $date, int $duree, string $resume, Realisateur $realisateur, Genre $genre) {
        $this->_titre = $titre;
        $this->_date = new DateTime($date);
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;
        $this->_resume = $resume;
        $this->_casting = [];

        $realisateur->AjouterFilm($this);   //relie le film à la classe du réalisateur et donc au tableau "film"
        $genre->AjouterListe($this);        //relie le film à la classe du genre et donc au tableau "Liste"
    
    }

    // GETTER

    public function getTitre() {
        return $this->_titre;
    }
    public function getDate() {
        return $this->_date;
    }
    public function getDuree() {
        return $this->_duree;
    }
    public function getRealisateur() {
        return $this->_realisateur;
    }
    public function getGenre() {
        return $this->_genre;
    }
    public function get_resume()
    {
        return $this->_resume;
    }


    // SETTER

    public function setTitre(string $NewTitre) {
        $this->_nom = $NewTitre;
    }
    public function setDate(DateTime $NewDate) {
        $this->_date = $NewDate;
    }
    public function setDuree(string $NewDuree) {
        $this->_duree = $NewDuree;
    }
    public function setRealisateur(string $NewRealisateur) {
        $this->_realisateur = $NewRealisateur;
    }
    public function setGenre(string $NewGenre) {
        $this->_genre = $NewGenre;
    }
    public function setResume(string $NewResume) {
        $this->_resume = $NewResume;
    }

   
// FONCTION

    public function AddCasting($NewCasting) {
        $this->_casting[] = $NewCasting;
    }

    public function getInfo() {     //fonction pour afficher juste titre et date pour AfficherListe
        return "$this->_titre (".$this->getDate()->format("Y").")";
    }
    public function getFilmo() {
        return "$this->_titre (".$this->getDate()->format("Y").") est un film $this->_genre, d'une durée de $this->_duree minutes. <br> Synopsis : ".$this->_resume;
    }

    public function afficherListeActeur() {
        $result = "<h2> Liste de rôle dans ".$this->getTitre()." </h2>";
        foreach ($this->_casting as $casting) {
            $result .= " Le casting est : ".$casting->getRole()." joué par : ".$casting->getActeur()."<br>";
        }
        return $result;
    }
    


// TO STRING

    public function __toString() {
        return "$this->_titre (".$this->getDate()->format("Y").")";
    }
}
