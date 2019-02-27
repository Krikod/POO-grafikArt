<?php

class Personnage {
    public $vie = 21;
    public $atk = 20;
    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function regenerer($vie = null)
    {
        if (is_null($vie)) {
            $this->vie = 100;
        } else {
//            $this->vie = $this->vie + $vie;
            $this->vie += $vie;
        }
    }

    public function mort()
    {
        return $this->vie <= 0;
    }

    public function attaque($cible)
    {
        $cible->vie -= $this->atk;
    }
}