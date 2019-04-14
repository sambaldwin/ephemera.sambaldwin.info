<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<?php if ($page->children()) : ?>
  <ul>
    <?php foreach ($page->children() as $post) : ?>
      <li>
        <a href="<?= $post->url() ?>"><?= $post->title() ?></a>
        <time datetime="<?= $post->datePosted()->toDate('d-m-Y') ?>">
          <?= $post->datePosted()->toDate('j F Y') ?>
        </time>
      </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>

<?php snippet('footer') ?>