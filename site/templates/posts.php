<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<?php snippet('posts', ['p' => $page]) ?>

<?php snippet('footer') ?>