<?php snippet('header') ?>
<?php snippet('navigation') ?>

	<main class="contacto js-contacto">

		<h1><?= $page->title()->html() ?></h1>

		<form class="contacto__form" id="contacto-form" action="<?= $site->url()?>/contacto.php" method="POST">
			<div class="contacto__form__button">
				<button type="submit">Enviar</button>
			</div>
		</form>
	
	</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>
