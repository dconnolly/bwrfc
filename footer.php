
    <?php roots_footer_before(); ?>
    
    <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
      <hr>
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('roots-footer'); ?>
      <div class="footer-sponsors">
           <a href="http://www.oneills.com" >
             <img id="oneills-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/oneils_logo.png" alt="O'Neills logo">
            </a>
           <a href="http://www.fenwayhealth.org" >
             <img id="fenway-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fenway_logo.png" alt="Fenway Health logo">
            </a>
            <a href="http://www.bansheeboston.com" >
             <img id="banshee-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/banshee_logo.png" alt="The Banshee logo">
            </a>
      </div>
      <h6 style="display: inline;">Photography by <a href="http://www.kimberlyvarney.com/">Kimberly Varney</a>.</h6>
      <h6 class="copy" style="display: inline; float: right;">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></h6>
    </footer>
    <?php roots_footer_after(); ?>

  </div><!-- /#wrap -->

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>

</body>
</html>