<?php

require 'Personnage.php';
require 'Archer.php';
// Archer hérite de Personnage donc require en 2e.

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
$legolas = new Archer('Legolas');

$legolas->attaque($harry);

var_dump($merlin, $harry, $legolas);
