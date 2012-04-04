
    <?php roots_footer_before(); ?>
    
    <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
      <hr>
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('roots-footer'); ?>
      <p class="copy"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
    </footer>
    <?php roots_footer_after(); ?>

  </div><!-- /#wrap -->

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>

</body>
</html>