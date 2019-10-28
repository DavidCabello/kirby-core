<nav class="navigation">

	<div class="navigation__logo">
		<a href="<?= $site->url(); ?>" title="<?= $site->title(); ?>">
			<img src="<?= $site->url(); ?>/assets/icons/logo.svg" alt="">
			logo
		</a>
	</div>
	
	<div class="d-flex justify-content-around navigation__container">
		<a href="<?= page('home')->url() ?>">
			Home
		</a>
		<a href="<?= page('contacto')->url() ?>">
			Contacto
		</a>
	</div>

	<div class="navigation__menu">
		<a class="js-open-menu">
			open
		</a>
	</div>

</nav>

<?php snippet ('menu') ?>

