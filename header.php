<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
    } else {
        bloginfo('description');
    }                                      
    ?>" />   

  <meta name="viewport" content="width=device-width">

  <?php roots_stylesheets(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
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
            preload: {
                       active: true
            },
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
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>

  <?php roots_head(); ?>  
  <?php wp_head(); ?>

</head>

<body <?php body_class(roots_body_class()); ?>>

  <!--[if lt IE 9]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <?php roots_header_before(); ?>
  <header id="banner" class="container" role="banner">
    <?php roots_header_inside(); ?>
    <div id="follow-me">
      <a href="http://www.facebook.com/bostonwomensrfc">
        <img class="icon png grey" alt="Follow bostonwomensrfc on Facebook" src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png">
        <img class="icon png white" alt="Follow bostonwomensrfc on Facebook" src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook_white.png">
      </a>
      <a href="http://www.twitter.com/bostonwomensrfc">
        <img class="icon png grey" alt="Follow @bostonwomensrfc on Twitter" src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png">
        <img class="icon png white" alt="Follow @bostonwomensrfc on Twitter" src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter_white.png">
      </a>
      <a href="/feed">
        <img class="icon png grey" alt="Follow us via rss" src="<?php echo get_stylesheet_directory_uri(); ?>/img/rss.png">
        <img class="icon png white" alt="Follow us via rss" src="<?php echo get_stylesheet_directory_uri(); ?>/img/rss_white.png">
      </a>
    </div>
    <h1 id="header-logo">
      <a href="/" class="logo"><?php bloginfo('name'); ?> <small>est. 1976</small></a>
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
  <div id="slides" class="primary-image">
      <div id="support" class="slide">
        <img alt="Support BWRFC" src="<?php echo get_stylesheet_directory_uri(); ?>/img/IMG_3924_960x300.jpg">
        <h1><span>Support</span></h1>              
      </div>
      <div id="score" class="slide">
        <img alt="Score BWRFC" src="<?php echo get_stylesheet_directory_uri(); ?>/img/KimVarney-30_960x300.jpg">
        <h1><span>Score</span></h1>
      </div>
      <div id="tackle" class="slide">
        <img alt="Tackle BWRFC" src="<?php echo get_stylesheet_directory_uri(); ?>/img/KimVarney-1_960x300.jpg">
        <h1><span>Tackle</span></h1>
      </div>
      <div id="win" class="slide">
        <img alt="Win BWRFC" src="<?php echo get_stylesheet_directory_uri(); ?>/img/KimVarney-9_960x300.jpg">
        <h1><span>Win</span></h1>
      </div>
      <div id="attack" class="slide">
        <img alt="Attack BWRFC" src="<?php echo get_stylesheet_directory_uri(); ?>/img/KimVarney-28_960x3001.jpg">
        <h1><span>Attack</span></h1>
      </div>
  </div>
  <?php } else { ?>
  <div class="attachment-post-thumbnail primary-image">
    <?php if (has_post_thumbnail()) { ?>
    <?php the_post_thumbnail(); ?>
    <?php } else { ?>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jerseys.jpg" class="attachment-post-thumbnail wp-post-image" alt="Boston Women's Rugby jerseys, 2011" title="BWRFC jerseys 2011">
    <?php } ?>
    <?php if (wp_title("", 0)) { ?>
    <h1><span><?php wp_title("", true); ?></span></h1>
    <?php } ?>
    <?php } ?>
  </header>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="<?php echo WRAP_CLASSES; ?>" role="document">
