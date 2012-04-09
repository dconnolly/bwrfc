
    <?php roots_footer_before(); ?>
    
    <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
      <hr>
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('roots-footer'); ?>
      <h6 style="display: inline;"> Photography by <a href="http://www.kimberlyvarney.com/">Kimberly Varney</a>.</h6>
      <h6 class="copy" style="display: inline; float: right;"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></h6>
    </footer>
    <?php roots_footer_after(); ?>

  </div><!-- /#wrap -->

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>

</body>
</html>