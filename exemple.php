<?php

namespace Krikod;

require 'class/Autoloader.php';
Autoloader::register();

// Archer hérite de Personnage donc require en 2e.

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
$legolas = new Archer('Legolas');
        var_dump($merlin, $harry, $legolas);
$legolas->attaque($harry);


