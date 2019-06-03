<!DOCTYPE html>
<html>
<head>
	<!--M E T A-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?= page('settings')->seodescription()->html() ?>">
	<meta name="keywords" content="<?= page('settings')->seotags()->html() ?>">
	<meta name="application-name" content="<?= $site->title()->html(); ?>">

	<!--T I T L E-->
	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

	<!--LINK-->
	<link rel="author" href="<?= $site->author()->html(); ?>">
	<link rel="index" href="<?= $site->url(); ?>">
	<?php if($page->url()!=''): ?><link rel="canonical" href="<?= $page->url(); ?>"><?php else: ?><link rel="canonical" href="<?= $site->url(); ?>"><?php endif ?>
	

	<!-- F A V I C O N S -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $site->url()?>/assets/favicon/favicon.png?v=<?= $site->favicon(); ?>">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png?v=<?= $site->favicon(); ?>">
	<meta name="theme-color" content="#ffffff">

	<!-- C S S -->
	<?= css('assets/css/main.min.css') ?>

</head>
<body>
