<div class="menu js-menu" role="menu">

    <div class="menu__close">
		<a class="js-close-menu">
			close
        </a>
	</div>

    <div class="menu__navigation">
        <?php foreach($pages->visible() as $subpage): ?>
			<a <?php e($subpage->isActive(), 'class="active"') ?> href="<?= $subpage->url() ?>">
				<?= html($subpage->title()) ?>
			</a>
		<?php endforeach ?>

        <!-- <a href="<?= page('home')->url() ?>">Home</a>
        <a href="<?= page('contacto')->url() ?>">Contacto</a>      -->
    </div>

    <!--WAYPOINTS MENU-->	
    <!-- <div class="menu__navigation" id="scroller__menu">
        <a data-id="#scrollTo__home" href="<?= $site->url(); ?>">
            Home
        </a>
        <a data-id="#scrollTo__contacto" href="<?= $site->url(); ?>">
            Contacto
        </a>
    </div> -->
    
</div>