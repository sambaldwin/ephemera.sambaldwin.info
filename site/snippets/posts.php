<?php if ($p->children()) : ?>
  <ul>
    <?php foreach ($p->children() as $post) : ?>
      <li>
        <a href="<?= $post->url() ?>"><?= $post->title() ?></a>
        <time datetime="<?= $post->datePosted()->toDate('d-m-Y') ?>">
          <?= $post->datePosted()->toDate('j F Y') ?>
        </time>
      </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>