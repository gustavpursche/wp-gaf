<!Doctype html/>
<html lang="en">
<head>
  <?php
    $title = wp_title( '', FALSE );

    if( !$title ) {
      $title = 'GAF Hannover';
    }
   ?>
  <title><?php echo $title; ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />

  <link rel="stylesheet"
        href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

  <?php wp_head(); ?>
</head>
<body>

<header class="header">
  <?php if( !is_home() ) { ?>
    <a href="<?php echo home_url(); ?>">
  <?php } ?>

    <img src="<?php echo get_bloginfo('template_url'); ?>/style/logo.svg"
         class="header__logo"
         alt="GAF Hannover - Logo" />

  <?php if( !is_home() ) { ?>
    </a>
  <?php } ?>

  <?php wp_nav_menu(); ?>
</header>