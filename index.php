<?php

use \Krikod\HTML\BootstrapForm;
use Krikod\Autoloader;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <?php
        require 'class/Autoloader.php';
        Autoloader::register();
        $form = new BootstrapForm($_POST);
        ?>

        <form action="#" method="post">
            <?php
            echo $form->input('Nom: ');
            echo $form->input( 'Mot de passe: ');
            echo $form->submit();
            ?>
        </form>
    </body>
</html>
