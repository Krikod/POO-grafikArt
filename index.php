<?php

require "Form.php";
require "Text.php";
require "Personnage.php";

$merlin = new Personnage('Merlin');
$merlin->regenerer();
var_dump($merlin);

$form = new Form($_POST);
// Appeler la méthode statique de la classe Text.
// Prop. ou meth. static = propres à la classe, non aux instances ->
// pas besoin d'instancier la classe !
var_dump(Text::withZero(1));
?>
<form action="#" method="post">
    <?php
    echo $form->input('Nom: ', 'text', 'username');
    echo $form->input('Mot de passe: ', 'password', 'password');
    echo $form->submit();
    ?>
</form>
