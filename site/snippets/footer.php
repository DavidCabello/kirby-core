<footer class="footer">

	<div class="footer__logo">
		<a href="<?= $site->url(); ?>" title="<?= $site->title()->html(); ?>">
			<?php snippet('icons/logo') ?>
			logo
		</a>
	</div>

	<div class="footer__address">
		<p><?= page('contacto')->email()->html() ?></p>
		<p>phone</p>
	</div>

	<div class="footer__social">

		<a href="<?= page('contacto')->twitter() ?>" title="Twitter" target="_blank">
			<?php snippet('icons/twitter') ?>
			Twitter
		</a>

		<a href="<?= page('contacto')->facebook() ?>" title="Facebook" target="_blank">
			<?php snippet('icons/facebook') ?>
			Facebook
		</a>
	
		<a href="<?= page('contacto')->instagram() ?>" title="Instagram" target="_blank">
			<?php snippet('icons/instagram') ?>
			Instagram
		</a>
		
	</div>

</footer>
