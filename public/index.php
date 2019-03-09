<?php

require '../app/Autoloader.php';
App\Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

// Initialisation des Objets:
$db = new \App\Database('blogPoo');


// Au lieu d'afficher, on stockera dans une variable $content
ob_start();

if ($p === 'home') {
    require '../pages/home.php';
} elseif ($p === 'article') {
    require  '../pages/single.php';
}
// La variable $content prendra le contenu précédemment créé.
$content = ob_get_clean();
require '../pages/templates/default.php';