<?php
/*
Template Name: New Players
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
        <h2> Play with Boston! </h2>
      <?php roots_sidebar_inside_before(); ?>
        <span class="hs-form-target">
          <script type="text/javascript">
            var ckTest = document.cookie.match ( '(^|;) ?hubspotutk=([^;]*)(;|$)' ),
            fuid = null, jqVers = null, hutk = null, jsSrc;
            if (ckTest && ckTest[2]) {
              hutk = ckTest[2]; 
            } else if (window['hsut']){
              hutk = window['hsut'];
            }
            if (typeof(jQuery) !== 'undefined') {
              jqVers = jQuery().jquery;
            }
            jsSrc = "http://api.hubapi.com/embed/v1/forms/166270/cf0ee084-cb97-45c7-bf1f-96783dde98e5";
            jsSrc += "?hutk=" + hutk;
  
            jsSrc += "&jq=" + jqVers;
            document.write("<script src='" + jsSrc + "'><\/script>");
          </script>
          <script>
            hbspt.forms.initialize(hbspt.forms.context, '.hs-form-target');
          </script>
        </span>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>