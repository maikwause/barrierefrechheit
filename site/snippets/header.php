<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('assets/images/favicon.ico') ?>">
  <?php echo css('assets/styles/format.css') ?>
  <!--[if lte IE 7]>
  <link href="../yaml/core/iehacks.css" rel="stylesheet" type="text/css" />
  <?php echo css('assets/styles/iehacks.css') ?>
  <![endif]-->

  <!--[if lt IE 9]>
  <?php echo js('assets/js/html5shiv.js') ?>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <![endif]-->
  <?php echo css('assets/styles/css.css') ?>
  <?php echo css('assets/styles/html.css') ?>
  <?php echo css('assets/styles/php.css') ?>

</head>

<body>
<ul class="ym-skiplinks">
  <li><a class="ym-skip" href="#nav">Zur Navigation</a></li>
  <li><a class="ym-skip" href="#main">Zum Inhalt</a></li>
</ul>

<div class="ym-wrapper">
  <div class="ym-wbox">
    <header role="banner">
    <div id="giraffitti">&nbsp;</div>
    <div id="headline">
      <h1><a href="<?php echo url(); ?>">Barrierefrechheit</a></h1>
      <h2>&lt;uneingeschränkt entwickeln /&gt;</h2>
    </div>  
    <nav id="nav" role="navigation">
          <?php snippet('search'); ?>    
    <?php snippet('menu'); ?>
    <?php 
    snippet('submenu') 
    ?>
    </nav>
    </header>
