<!doctype html>
<html lang="en">
  
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <link rel="icon" type="image/png" href="<?= $site->url()?>/assets/favicon/favicon.png">

  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

