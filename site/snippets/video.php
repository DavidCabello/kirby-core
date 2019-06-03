<?php
// stop without videos
if(empty($videos)) return;
// set some defaults
if(!isset($width))    $width    = '100%';
if(!isset($height))   $height   = '100%';
if(!isset($preload))  $preload  = true;
if(!isset($controls)) $controls = true;
// build the html tags for the video element
$preload  = ($preload)  ? ' preload="preload"'   : '';
$controls = ($controls) ? ' controls="controls"' : '';
?>

<video playsinline autoplay muted loop id="myVideo">
  <?php foreach($videos as $video): ?>
  <source src="<?php echo $video->url() ?>" type="<?php echo $video->mime() ?>" />
  <?php endforeach ?>
  <?php if(isset($thumb)): ?>
  <img src="<?php echo $thumb->url() ?>" alt="<?php echo $thumb->title() ?>" />
  <?php endif ?>
</video>
