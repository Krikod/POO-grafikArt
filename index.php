<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
require 'Form.php';
require 'BootstrapForm.php';
$form = new BootstrapForm($_POST);
?>

<form action="#" method="post">
    <?php
    echo $form->input('Nom: ', 'text', 'username');
    echo $form->input('Mot de passe: ', 'password', 'password');
    echo $form->submit();
    ?>
</form>
</body>
</html>
