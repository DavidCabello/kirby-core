<nav class="navigation">

	<div class="navigation__logo">
		<a href="<?= $site->url(); ?>" title="<?= $site->title(); ?>">
			<img src="<?= $site->url(); ?>/assets/icons/logo.svg" alt="">
			logo
		</a>
	</div>
	
	<div class="d-flex justify-content-around navigation__container">
		<?php foreach($pages->visible() as $subpage): ?>
			<a <?php e($subpage->isActive(), 'class="active"') ?> href="<?= $subpage->url() ?>">
				<?= html($subpage->title()) ?>
			</a>
		<?php endforeach ?>
		
		<!-- <a href="<?= page('home')->url() ?>">
			Home
		</a>
		<a href="<?= page('contacto')->url() ?>">
			Contacto
		</a> -->

		<!--WAYPOINTS NAV-->	
		<!-- <div id="scroller">
			<a data-id="#scrollTo__home" href="<?= $site->url(); ?>">
				Home
			</a>
			<a data-id="#scrollTo__contacto" href="<?= $site->url(); ?>">
				Contacto
			</a>
		</div> -->

	</div>

	<div class="navigation__menu">
		<a class="js-open-menu">
			open
		</a>
	</div>

</nav>

<?php snippet ('menu') ?>

