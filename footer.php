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
      <h6 class="photo-credits">Photography by <a href="http://www.kimberlyvarney.com/">Kimberly Varney</a>.</h6>
      <h6 class="copy">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></h6>
    </footer>
    <?php roots_footer_after(); ?>

  </div><!-- /#wrap -->

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
  <!-- Start of HubSpot Logging Code  -->
  <script type="text/javascript" language="javascript">
      var hs_portalid=166270; 
      var hs_salog_version = "2.00";
      var hs_ppa = "bwrfc.app12.hubspot.com";
      document.write(unescape("%3Cscript src='" + document.location.protocol + "//" + hs_ppa + "/salog.js.aspx' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <!-- End of HubSpot Logging Code -->
</body>
</html>