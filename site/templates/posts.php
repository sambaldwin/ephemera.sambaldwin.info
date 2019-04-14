<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<?php if ($page->children()) : ?>
  <ul>
    <?php foreach ($page->children() as $project) : ?>
      <li>
        <a href="<?= $project->url() ?>"><?= $project->title() ?></a>
        <time datetime="<?= $project->datePosted()->toDate('d-m-Y') ?>">
          <?= $project->datePosted()->toDate('j F Y') ?>
        </time>
      </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>

<?php snippet('footer') ?>