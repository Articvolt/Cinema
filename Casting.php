<?php

class Casting {
    private Acteur $_acteur;
    private Role $_role;
    private Film $_film;

// CONSTRUCT

    public function __construct(Acteur $acteur, Role $role, Film $film) {

        $this->_acteur = $acteur;
        $acteur->AddCasting($this);     //chemin retour mets l'acteur dans la fonction AddCasting
        $this->_role = $role;
        $role->AddCasting($this);
        $this->_film =$film;
        $film->AddCasting($this);

    }

// GETTER

    public function getActeur() {
        return $this->_acteur;
    }
    public function getRole() {
        return $this->_role;
    }
    public function getFilm() {
        return $this->_film;
    }

// SETTER  

    public function setActeur(string $NewActeur) {
        $this->_acteur = $NewActeur;
    }
    public function setRole(string $NewRole) {
        $this->_role = $NewRole;
    }
    public function setFilm(string $NewFilm) {
        $this->_film = $NewFilm;
    }

// FONCTION
    public function __toString() {
        return $this->_acteur." a joué le rôle de ".$this->_role." dans ".$this->_film;
    }
}