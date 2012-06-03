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
  <!-- Start of Async HubSpot Tracking Code -->
    <script type="text/javascript">
        var _hsq = _hsq || [];
        (function(d,s,i) {
            if (d.getElementById(i)){return;}
            var n = d.createElement(s),e = document.getElementsByTagName(s)[0];
            n.id=i;n.src = '//js.hubspot.com/tracking/166270.js';
            e.parentNode.insertBefore(n, e);
        })(document, "script", "hs-analytics");
    </script>
  <!-- End of Async Hubspot Tracking Code -->     
</body>
</html>