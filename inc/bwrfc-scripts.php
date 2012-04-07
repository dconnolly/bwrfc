<?php

function bwrfc_scripts() {
  $template_uri = get_template_directory_uri();

  wp_register_script('bwrfc_script', ''.$template_uri.'/js/script.js', false, null, false);
  wp_enqueue_script('bwrfc_script');
}

add_action('wp_enqueue_scripts', 'bwrfc_scripts');

if (!is_admin()) {
  add_action('wp_print_scripts', 'bwrfc_print_scripts');
}

function bwrfc_print_scripts() {
  global $wp_scripts;
  $wp_scripts->all_deps($wp_scripts->queue);
  $scripts = array();

  foreach ($wp_scripts->queue as $key => $handle) {
    $skip_scripts = array('jquery', 'roots_script', 'roots_plugins');

    $src = $wp_scripts->registered[$handle]->src;
    unset($wp_scripts->queue[$key]);
    $wp_scripts->done[] = $handle;

    if (!in_array($handle, $skip_scripts)) {
      $scripts[] = '<script src="' . $src . '"></script>';
    }
  }

  echo "\t" . implode("\n\t", $scripts) . "\n";

  $template_uri = get_template_directory_uri();
  echo "\t<script src=\"$template_uri/js/script.js\"></script>\n";

  $wp_scripts->reset();
  return $wp_scripts->done;
}

?>