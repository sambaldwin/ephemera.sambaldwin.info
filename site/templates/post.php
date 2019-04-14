<?php snippet('header') ?>

<article class="page">
  <header class="page__header">
    <h1 class="page__title"><?php echo $page->title()->html() ?></h1>
    <button class="unset">Share</button>
  </header>
  <div class="page__main">
    <?php if ($page->images()->isNotEmpty()) : ?>
      <div class="page__images">
      <?php foreach ($page->images() as $image) : ?>
        <figure>
          <?= $image ?>
          <?php if ($image->caption()->isNotEmpty()) : ?>
            <figcaption><?= $image->caption()->kirbytextinline() ?></figcaption>
          <?php endif; ?>
        </figure>
      <?php endforeach ?>
      </div>
    <?php endif ?>
    <?php if ($page->text()->isNotEmpty()) : ?>
      <div class="page__text">
        <?= $page->text()->kirbytext() ?>
      </div>
    <?php endif ?>
  </div>
  <footer class="page__footer">
    <time datetime="<?= $page->datePosted()->toDate('d-m-Y') ?>">
      Posted <?= $page->datePosted()->toDate('j F Y') ?>
    </time>
  </footer>
</article>

<?php snippet('footer') ?>
