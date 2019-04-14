<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<!-- NOTE Pages can have subpages. Should these be in a submenu of some sort? -->

<?= $page->text()->kirbytext() ?>

<?php foreach ($page->images() as $image) : ?>
  <figure>
    <?= $image ?>
    <?php if ($image->caption()->isNotEmpty()) : ?>
      <figcaption><?= $image->caption()->kirbytextinline() ?></figcaption>
    <?php endif; ?>
  </figure>
<?php endforeach ?>

<?php snippet('footer') ?>
