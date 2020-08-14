<div class="menu js-menu" role="menu">

    <div class="menu__close">
		  <a class="js-close-menu">
        <img src='<?= $site->url() ?>/assets/icons/close.svg'>
      </a>
    </div>

    <nav class="menu__navigation">
      <?php foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
      <?php endforeach ?>
    </nav>
    
</div>