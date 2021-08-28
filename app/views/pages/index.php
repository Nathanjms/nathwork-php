<h1><?= $data['title']; ?></h1>
<h2>Posts:</h2>
<?php foreach ($data['posts'] as $post) : ?>
    <h3>ID: <?= $post->id; ?></h3>
    <h3>Title<?= $post->title; ?></h3>
    <br>
<?php endforeach; ?>
