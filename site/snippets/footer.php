<footer class="footer">

    <div class="footer__logo">
      <a href="<?= $site->url(); ?>" title="<?= $site->title() ?>">
        <img src="<?= $site->url(); ?>/assets/icons/logo.svg" alt="logo">
      </a>
    </div>

    <div class="footer__address">
      <p><?= page('contacto')->email()->html() ?></p>
    </div>

    <div class="footer__social">

      <a href="<?= page('contacto')->facebook() ?>" title="Facebook" target="_blank">
        <img src="<?= $site->url(); ?>/assets/icons/facebook.svg" alt="facebook">
      </a>

      <a href="<?= page('contacto')->instagram() ?>" title="Instagram" target="_blank">
        <img src="<?= $site->url(); ?>/assets/icons/instagram.svg" alt="instagram">
      </a>
      
    </div>

</footer>

<!-- JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?= js(['assets/js/main.min.js', '@auto']) ?>
<?= js(['assets/js/plugins.min.js', '@auto']) ?>

</body>
</html>