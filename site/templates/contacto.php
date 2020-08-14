<?php snippet('header') ?>

<main class="contacto">

  <h1><?= $page->title()->html() ?></h1>

  <?php if ($alerts) : ?>
    <div class="alert">
        <ul>
          <?php foreach ($alerts as $message): ?>
            <li><?= kirbytext($message) ?></li>
          <?php endforeach ?>
        </ul>
    </div>
  <?php endif ?>

  <form class="contact-form" method="POST" action="<?= $page->url() ?>" enctype="multipart/form-data">
    
    <div class="honey">
        <label for="website">Website <abbr title="required">*</abbr></label>
        <input type="website" id="website" name="website">
    </div>

    <div class="form-element">
        <label for="name">
            Nombre <abbr title="required">*</abbr>
        </label>
        <input type="text" id="name" name="name" value="<?= $data['name'] ?? null ?>" required>
        <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
    </div>

    <div class="form-element">
        <label for="email">
            Correo <abbr title="required">*</abbr>
        </label>
        <input type="email" id="email" name="email" value="<?= $data['email'] ?? null ?>" required>
    </div>

    <div class="form-element">
        <label for="message">Mensaje</label>
        <textarea id="message" name="message"><?= $data['message']?? null ?></textarea>
    </div>

    <div class="form-element">
      <label for="file">Adjunta tus archivos
        <span class="help">Revisa que tu archivo no pese más de 2MB</span>
      </label>
      <input name="file[]" type="file" multiple required>
    </div>

    <input type="submit" name="submit" value="Submit">

  </form>
  
</main>

<?php snippet('footer') ?>