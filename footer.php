    <?php roots_footer_before(); ?>
    
    <footer id="content-info" role="contentinfo">
      <hr>
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('roots-footer'); ?>
      
      <ul class="footer-sponsors">
          <li>
           <a href="http://www.oneills.com" >
             <img id="oneills-logo" class="sponsor-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/oneils_logo.png" alt="O'Neills logo">
            </a>
          </li>
          <li>
           <a href="http://www.fenwayhealth.org" >
             <img id="fenway-logo" class="sponsor-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fenway_logo.png" alt="Fenway Health logo">
            </a>
          </li>
          <il>
            <a href="http://www.bansheeboston.com" >
             <img id="banshee-logo" class="sponsor-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/banshee_logo.png" alt="The Banshee logo">
            </a>
          </li>
      </ul>
      
      <h6 class="photo-credits">Photography by <a href="http://www.kimberlyvarney.com/">Kimberly Varney</a>.</h6>
      <h6 class="copy">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></h6>
    </footer>
    <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
  </div> <!-- /div.container -->

</body>
</html>