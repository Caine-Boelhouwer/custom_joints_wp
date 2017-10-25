<?php
// Set post per custom post type page overview
function set_posts_per_page( $query ) {
  // Show 9999 post per page #VACATURES
  if( $query->is_main_query() && !$query->is_feed() && !is_admin() && $query->is_post_type_archive( 'vacatures' ) ) {
		$query->set( 'posts_per_page', '9999' );
	}
}
add_action( 'pre_get_posts',  'set_posts_per_page'  );
