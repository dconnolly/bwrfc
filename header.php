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

  <script>
   jQuery(function($) {
    $('li.dropdown').hover(
        function() {
            $(this).toggleClass('open');
        }
    );
   });

  </script>
  <?php roots_head(); ?>
  
  <?php wp_head(); ?>

</head>

<body <?php body_class(roots_body_class()); ?>>

  <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <?php roots_header_before(); ?>
    <header id="banner" class="container" role="banner">
      <?php roots_header_inside(); ?>
      <div class="top">
        <h1 id="header-logo">
          <a href="/">Boston Women's Rugby</a>
        </h1>  
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
      </div>
      
      <?php if (!has_post_thumbnail() && !wp_title("", 0)) { ?>
      <div id="slides">
        <div class="slides_container" style="overflow-x: hidden; overflow-y: hidden; position: relative; display: block; ">
          <div class="slides_control" style="position: relative; width: 1410px; height: 170px; left: -470px; ">
            <div style="position: absolute; top: 0px; left: 470px; z-index: 0; ">
              
              <h1>Support</h1>              
            </div>
            <div style="position: absolute; top: 0px; left: 470px; z-index: 0; display: none; ">
              <h1>Score</h1>
            </div>
            <div style="position: absolute; top: 0px; left: 470px; z-index: 0; display: none; ">
              <h1>Tackle</h1>
              
            </div>
            <div style="position: absolute; top: 0px; left: 470px; z-index: 0; display: none; ">
              <h1>Win</h1>
              
            </div>
            <div style="position: absolute; top: 0px; left: 470px; z-index: 0; display: none; ">
              <h1>Attack</h1>
              
            </div>
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
      </div>
    </header>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="<?php echo WRAP_CLASSES; ?>" role="document">
