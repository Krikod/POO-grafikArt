<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
//$merlin->nom = "Merlin"; --> construct pour éviter cela.
//$merlin->regenerer(5);

$harry = new Personnage("Harry");

//$harry->regenerer();
//$harry->vie = 0;

$merlin->attaque($harry);

if ($harry->mort()) {
    echo "Harry est mort";
} else {
    echo "Harry a survécu. Il lui reste " . $harry->vie . " points de vie";
}
//echo '<pre>';
var_dump($merlin);
var_dump($harry);
//echo '</pre>';
