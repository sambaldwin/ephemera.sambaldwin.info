<?php snippet('header') ?>

<article class="page">
  <header class="page__header">
    <h1 class="page__title"><?php echo $page->title()->html() ?></h1>
  </header>
  
  <?php if ($page->text()->isNotEmpty()) : ?>
    <div class="page__text">
      <?= $page->text()->kirbytext() ?>
    </div>
  <?php endif ?>
  
  <?php foreach ($page->images() as $image) : ?>
    <figure>
      <?= $image ?>
      <?php if ($image->caption()->isNotEmpty()) : ?>
        <figcaption><?= $image->caption()->kirbytextinline() ?></figcaption>
      <?php endif; ?>
    </figure>
  <?php endforeach ?>
</article>

<?php snippet('footer') ?>
