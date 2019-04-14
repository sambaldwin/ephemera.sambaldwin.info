<?php if ($p->children()) : ?>
  <div class="posts">
    <?php foreach ($p->children() as $post) : ?>
      <article class="post__post post">
        <a class="post__link" href="<?= $post->url() ?>">
          <?php foreach ($post->images() as $image) : ?>
            <figure>
              <?= $image ?>
              <?php if ($image->caption()->isNotEmpty()) : ?>
                <figcaption><?= $image->caption()->kirbytextinline() ?></figcaption>
              <?php endif; ?>
            </figure>
          <?php endforeach ?>
        </a>
      </article>
    <?php endforeach ?>
  </ul>
<?php endif ?>