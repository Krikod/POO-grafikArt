<?php
// PUBLIC: accessible de la classe par '$this->>prop', et du dehors $merlin->nom
// Par défaut, var en PRIVATE. Accessibilité depuis ext via ->getters.
// PRIVATE que ds la classe -> ou fct getNom(), return $this->nom. Hors classe, accès via $merlin->getNom();
// PROTECTED: (- strict que private) accès depuis d'autres classes qui hériteraient de celle-ci.
// setter $this->nom = $nom

class Personnage {
    private $vie = 21;
    private $atk = 20;
    private $nom;

    const MAX_VIE = 100;
//    ou private static $max_vie = 100;
// Propre à la classe et non à chaque instance (personnage)

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
            $this->vie = self::MAX_VIE;
//            $this->vie = self::$max_vie;
        } else { // $this->vie = $this->vie + $vie;
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