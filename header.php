<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <meta name="viewport" content="width=device-width">

  <?php roots_stylesheets(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.5.3.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <?php roots_head(); ?>
  <?php wp_head(); ?>

</head>

<body <?php body_class(roots_body_class()); ?>>

  <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <?php roots_header_before(); ?>
    <header id="banner" class="container" role="banner">
      <?php roots_header_inside(); ?>
      <a href="/">
        <h1 id="header-logo">Boston Women's Rugby</h1>
      </a>
      <div class="navbar">
        <div class="navbar-inner">
          <div class="<?php echo WRAP_CLASSES; ?>">
            <nav id="nav-main" class="nav-collapse" role="navigation">
              <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Navbar_Nav_Walker())); ?>
              <form role="search" method="get" id="searchform" class="navbar-search form-search pull-right" action="<?php echo home_url('/'); ?>">
                <label class="visuallyhidden" for="s">
                 <?php _e('Search for:', 'roots'); ?>
                </label>
                <input type="text" value="" name="s" id="s" class="search-query span2" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
              </form>
            </nav>
          </div>
        </div>
      </div>
    </header>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="<?php echo WRAP_CLASSES; ?>" role="document">
