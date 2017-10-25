<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Adding scripts file in the footer
    wp_register_script( 'google-maps-js', 'https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBheVmrWzerXZwuSzUjxZ26gFTIosGUpeE', array( 'jquery' ), null, true );
    wp_enqueue_script( 'google-maps-js' );

    // Adding scripts file in the footer
    wp_register_script( 'foundation-js', get_template_directory_uri() . '/assets/scripts/foundation.min.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
    wp_enqueue_script( 'foundation-js' );

    // Adding scripts file in the footer
    wp_register_script( 'slick-slider-js', get_template_directory_uri() . '/node_modules/slick/slick/slick.min.js', array( 'jquery' ), null, true);
    wp_enqueue_script( 'slick-slider-js' );

    // Adding scripts file in the footer
    wp_register_script( 'wow-js', get_template_directory_uri() . '/node_modules/wow/src/wow.js', array( 'jquery' ), null, true);
    wp_enqueue_script( 'wow-js' );

    wp_register_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.min.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
    wp_enqueue_script( 'site-js' );

    // Register main stylesheet
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/node_modules/slick/slick/slick.css', array(), null, null );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/node_modules/slick/slick/slick-theme.css', array(), null, null );
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/node_modules/wow/src/animate.css', array(), null, null );
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
