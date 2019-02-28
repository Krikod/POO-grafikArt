<?php

class Personnage {
    // Par défaut, variables en PRIVATE. Pour accessibilité depuis ext., ->getters.
    private $vie = 21; // public: accessible au sein de la classe par '$this->>prop'
    // et du dehors $merlin->nom
    // PRIVATE que dans la classe -> ou fct getNom(), return $this->>nom
    // accès au dehors: $merlin->getNom();
    // PROTECTED: (moins strict que private) accès depuis d'autres classes qui hériteraient de celle-ci.
    private $atk = 20;
    private $nom;
    // Meth. pour inverse, setter $this->>nom = $nom

    public function getVie()
    {
        return $this->vie;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    public function getNom()
    {
        return "M. " . $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

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