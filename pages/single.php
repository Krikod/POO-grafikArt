<?php

$post = $db->prepare('SELECT * FROM articles WHERE id= ?', [$_GET['id']], 'App\Table\Article', true);
var_dump($post);
?>

<h1><?= $post->title; ?></h1>
<p><?= $post->content; ?></p>



<p><a href="index.php?p=home">Home</a></p>

