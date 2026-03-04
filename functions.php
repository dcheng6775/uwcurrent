<?php
function uwcurrent_assets() {

  wp_enqueue_style(
    'bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css'
  );

  wp_enqueue_style(
    'uwcurrent-style',
    get_stylesheet_uri()
  );

  wp_enqueue_script(
    'bootstrap-js',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
    [],
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'uwcurrent_assets');

function uwcurrent_features() {
  add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'uwcurrent_features' );
