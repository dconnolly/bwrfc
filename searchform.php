<form role="search" method="get" id="searchform" class="navbar-search form-search pull-right" action="<?php echo home_url('/'); ?>">
  <label class="visuallyhidden" for="s"><?php _e('Search for:', 'roots'); ?></label>
  <input type="text" value="" name="s" id="s" class="search-query span2" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
</form>