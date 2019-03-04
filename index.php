<?php

require "form.php";

$form = new Form($_POST);
?>
<form action="#" method="post">
    <?php
    echo $form->input('Nom:', 'text', 'username');
    echo $form->input('Mot de passe: ', 'password', 'password');
    echo $form->submit();
    ?>
</form>
