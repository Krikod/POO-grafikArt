<?php

namespace Krikod;

class Archer extends Personnage
{
//    Archer a les propr du parent + celles de l'enfant:
    public $arc = 3;
//    On peut redéfinir les propr à la volée:
    public $vie = 40; // Pas accès à la vie du Personnage car en privé
    // => la mettre en protected pour que l'enfant puisse y avoir accès
    // Qd variable en protected, l'enfant peut la mettre avec une
    // L'enfant peut modifier la portée de la variable: protected ou public  (mais pas en provate)
    // Variable du Pers est écrasée car Archer a redéfini $vie.

    // Même chose pour les autres var ds Pers., on les met en protected.

    // Redef fct parent, doit avoir même nom et param (peut être surchargée ??)
    public function __construct($nom)
    {
        $this->vie = $this->vie / 2;
        parent::__construct($nom);
        // si on veut redef nom par ex
    }

// On redéfinit fct attaque (on la laisse public):
    public function attaque($cible)
    {
        // on x par 2 les pertes
//        $cible->vie -= 2 * $this->atk;
        // Ou on peut Atk 1 fois + appeler la méth parent
        $cible->vie -= $this->atk;
        parent::attaque($cible);
//        (utile pour modif le __construct) -- voir + haut
        $cible->stayPositif();
    }
}

// Héritage en série
//class Arbaletrier extends Archer
//{
//}