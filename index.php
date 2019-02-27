<?php

require 'Personnage.php';

$merlin = new Personnage();
$merlin->nom = "Merlin";
$merlin->regenerer();

$harry = new Personnage();
$harry->nom = "Harry";

echo '<pre>';
var_dump($merlin);
var_dump($harry);
echo '</pre>';
