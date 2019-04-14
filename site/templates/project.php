<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<p>
  <?= $page->dateCompleted()->toDate('d.m.Y') ?>
</p>

<?= $page->text()->kirbytext() ?>

<?php foreach ($page->images() as $image) : ?>
  <figure>
    <?= $image ?>
    <?php if ($image->caption()->isNotEmpty()) : ?>
      <figcaption><?= $image->caption()->kirbytextinline() ?></figcaption>
    <?php endif; ?>
  </figure>
<?php endforeach ?>

<?php if ($page->data()->isNotEmpty()) : ?>
  <ul>
    <?php foreach ($page->data()->toStructure() as $item) : ?>
      <li>
        <?= $item->label() ?>: <?= $item->text() ?>
        <!-- TODO Kirbytext parsing? What if missing label or text? -->
      </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>

<?php snippet('footer') ?>
