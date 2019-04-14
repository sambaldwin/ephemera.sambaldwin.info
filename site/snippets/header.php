<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" cntent="ie=edge">
    <title><?= e(!$page->isHomePage(), $page->title()->html() . ' – ') ?><?= $site->title() ?></title>
  </head>
  <body>

    <header role="banner">
      <a href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <nav role="navigation">
        <ul>
          <?php foreach ($site->children()->listed() as $item): ?>
            <li>
              <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
            </li>
          <?php endforeach ?>
        </ul>
      </nav>
    </header>