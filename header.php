<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <!-- <?php get_template_directory_uri() . '/main.js' ?> -->
</head>

<body <?php body_class(); ?>>

<header class="c-header">
  <nav class="l-container c-header__inner">

    <!-- ロゴ -->
    <a href="<?php echo home_url('/'); ?>" class="c-header__logo">
      desafio
    </a>

    <!-- PCナビ -->
    <div class="c-header__nav">
      <?php
      wp_nav_menu([
        'theme_location' => 'global_menu',
        'container' => false,
        'menu_class' => 'c-nav'
      ]);
      ?>
          <!--nav下の動く線-->
    <span class="active-line"></span>
    </div>


    <!-- ハンバーガー -->
    <button class="c-header__toggle">
      ☰
    </button>

  </nav>

  <!-- モバイルメニュー -->
  <div class="c-header__mobile">
    <?php
    wp_nav_menu([
      'theme_location' => 'global_menu',
      'container' => false
    ]);
    ?>
  </div>
  
</header>