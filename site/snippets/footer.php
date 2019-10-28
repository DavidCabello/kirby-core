<footer class="footer">

	<div class="footer__logo">
		<a href="<?= $site->url(); ?>" title="<?= $site->title()->html(); ?>">
			<img src="<?= $site->url(); ?>/assets/icons/logo.svg" alt="">
			logo
		</a>
	</div>

	<div class="footer__address">
		<p><?= page('contacto')->email()->html() ?></p>
		<p>phone</p>
	</div>

	<div class="footer__social">

		<a href="<?= page('contacto')->twitter() ?>" title="Twitter" target="_blank">
			<img src="<?= $site->url(); ?>/assets/icons/twitter.svg" alt="">
			Twitter
		</a>

		<a href="<?= page('contacto')->facebook() ?>" title="Facebook" target="_blank">
			<img src="<?= $site->url(); ?>/assets/icons/facebook.svg" alt="">
			Facebook
		</a>
	
		<a href="<?= page('contacto')->instagram() ?>" title="Instagram" target="_blank">
			<img src="<?= $site->url(); ?>/assets/icons/instagram.svg" alt="">
			Instagram
		</a>
		
	</div>

</footer>
