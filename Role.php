<?php

class Role {
    private string $_role;
    private array $_casting;

// CONSTRUCT
    public function __construct(string $role) {
        $this->_casting = [];
        $this->_role = $role;
    }

// GETTER

    public function get_role()
    {
        return $this->_role;
    }

// SETTER

    public function set_role($_newRole)
    {
        $this->_role = $_newRole;

        return $this;
    }

// FONCTIONS

    public function AddCasting($NewCasting) {
        $this->_casting[] = $NewCasting;
    }
    
    public function afficherListeRole() {
        $result = "<h2>Rôle dans ".$this->get_role() ."</h2>";
        foreach ($this->_casting as $casting) {
            $result .= "Dans le film : ".$casting->getFilm()." le rôle est joué par : ".$casting->getActeur()."<br>";
        }

        return $result;
    }
    


// TO STRING

    public function __toString() {
        return $this->_role;
    }
}