<h1>Je suis la Home</h1>

<p><a href="index.php?p=single">Single</a></p>
    <?php foreach ($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>

        <h2><a href="<?= $post->url; ?>"><?= $post->title; ?></a></h2>
            <p><?= $post->extrait; ?></p>

    <?php endforeach; ?>
