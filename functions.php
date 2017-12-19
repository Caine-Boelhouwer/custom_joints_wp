<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php');

// Google Maps Api Init
require_once(get_template_directory().'/functions/google-maps.php');

// Image sizes
require_once(get_template_directory().'/functions/image-sizes.php');

// Post items per page overview
require_once(get_template_directory().'/functions/post-per-page.php');

// Disable the admin bar
add_filter('show_admin_bar', '__return_false');

add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );

function add_current_nav_class($classes, $item) {

  // Getting the current post details
  global $post;

  // Getting the post type of the current post
  $current_post_type = get_post_type_object(get_post_type($post->ID));
  $current_post_type_slug = $current_post_type->rewrite[slug];

  // Getting the URL of the menu item
  $menu_slug = strtolower(trim($item->url));

  // If the menu item URL contains the current post types slug add the current-menu-item class
  if (strpos($menu_slug,$current_post_type_slug) !== false) {

     $classes[] = 'active';

  }

  // Return the corrected set of classes to be added to the menu item
  return $classes;

}

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php');

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php');
