<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
  <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> -->
  <script src="https://kit.fontawesome.com/e8ea9f8391.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<body>
    <!-- Top Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid container-lg">
        <a class="navbar-brand" href="#" aria-label="Millennium Web Works">
          <img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="img-fluid" alt="Millennium Web Works Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu( array(
          'theme_location'  => 'primary',
          'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'navbarCollapse',
          'menu_class'      => 'navbar-nav ms-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
      ?>
      </div>
    </nav>