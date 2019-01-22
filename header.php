<?php
/**
 * The header for our theme.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>document.documentElement.className+=' js-enabled';</script>
<?php #get_template_part('inc/js/webfontloader.js'); ?>
<?php #get_template_part('inc/js/lazysizes.js'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="Header" role="banner">

    <!-- <div class="Header-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <div class="Svg Svg--logo">
          <?php get_template_part( 'assets/svg/logo.svg' ); ?>
        </div>
      </a>
    </div> -->

    <h1 class="Header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

    <h2 class="Header-description"><?php bloginfo( 'description' ); ?></h2>

    <nav class="Header-nav" role="navigation">
      <?php wp_nav_menu( array(
        'container' => false,
        'menu_class' => 'Header-menu',
        'theme_location' => 'header'
      ) ); ?>
    </nav>

  </header>
