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

  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
  <?php if (!has_post_thumbnail() && !wp_title("", 0)) { ?>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/libs/slides.js"></script>
  <script>
    $(function(){
      $("#slides").slides({
            responsive: true,
            play: 5000,
            playInterval: 5000,
            navigation: false,
            pagination: false,
            startAtSlide: 5,
            effects: {
                       play: "fade"
            },
            fade: {
                    interval: 1000
            }
      }).slides("play");
    });
    
  </script>
  <?php } ?>

  <?php roots_head(); ?>  
  <?php wp_head(); ?>

</head>

<body <?php body_class(roots_body_class()); ?>>

  <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <?php roots_header_before(); ?>
  <header id="banner" class="container" role="banner">
    <?php roots_header_inside(); ?>  
    <h1 id="header-logo">
      <a href="/"><?php bloginfo('name'); ?></a> <small>est. 1976</small>
    </h1>  
    <div class="navbar">
      <div class="navbar-inner">
        <div class="<?php echo WRAP_CLASSES; ?>">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
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
  </div>
  <?php if (!has_post_thumbnail() && !wp_title("", 0)) { ?>
  <div id="slides">
      <div id="support" class="slide">
        <img src="/assets/IMG_3924_960x300.jpg">
        <h1><span>Support</span></h1>              
      </div>
      <div id="score" class="slide">
        <img src="/assets/KimVarney-30_960x300.jpg">
        <h1><span>Score</span></h1>
      </div>
      <div id="tackle" class="slide">
        <img src="/assets/KimVarney-1_960x300.jpg">
        <h1><span>Tackle</span></h1>
      </div>
      <div id="win" class="slide">
        <img src="/assets/KimVarney-9_960x300.jpg">
        <h1><span>Win</span></h1>
      </div>
      <div id="attack" class="slide">
        <img src="/assets/KimVarney-28_960x3001.jpg">
        <h1><span>Attack</span></h1>
      </div>
  </div>
  <?php } else { ?>
  <div class="attachment-post-thumbnail">
    <?php if (has_post_thumbnail()) { ?>
    <?php the_post_thumbnail(); ?>
    <?php } else { ?>
    <img src="/assets/jerseys.jpg" class="attachment-post-thumbnail wp-post-image" alt="Boston Women's Rugby jerseys, 2011" title="BWRFC jerseys 2011">
    <?php } ?>
    <?php if (wp_title("", 0)) { ?>
    <h1><span><?php wp_title("", true); ?></span></h1>
    <?php } ?>
    <?php } ?>
  </header>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="<?php echo WRAP_CLASSES; ?>" role="document">
