<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
//$merlin->nom = "Merlin"; --> construct pour éviter cela.
//$merlin->regenerer(5);

$harry = new Personnage("Harry");

//$harry->regenerer();
//$harry->vie = 0;

$merlin->attaque($harry);
$merlin->setNom('JUJu');

if ($harry->mort()) {
    echo "Harry est mort";
} else {
    echo "Harry a survécu. Il lui reste " . $harry->getVie() . " points de vie";
}
//echo '<pre>';
var_dump($merlin->getNom());
var_dump($harry->getAtk());
//echo '</pre>';
