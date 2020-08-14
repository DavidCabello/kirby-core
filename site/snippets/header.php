<!doctype html>
<html lang="en">
  
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <link rel="icon" type="image/png" href="<?= $site->url()?>/assets/favicon/favicon.png">

  <!-- CSS -->
  <?= css(['assets/css/main.min.css', '@auto']) ?>

</head>

<body>

  <header class="header">

    <div class="header__logo">
      <a href="<?= $site->url(); ?>" title="<?= $site->title(); ?>">
        <img src="<?= $site->url(); ?>/assets/icons/logo.svg" alt="logo">
      </a>
    </div>
	
    <nav class="d-flex justify-content-around header__container">
      <?php foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
      <?php endforeach ?>
    </nav>

    <div class="header__menu">
      <a class="js-open-menu">
        <img src='<?= $site->url() ?>/assets/icons/open.svg'>
      </a>
    </div>

  </header>

  <?php snippet ('menu') ?>

