<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>
<time datetime="<?= $page->datePosted()->toDate('d-m-Y') ?>">
  <?= $page->datePosted()->toDate('j F Y') ?>
</time>

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
