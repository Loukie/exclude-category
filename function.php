function exclude_category( $query ) {
if ( $query->is_home() && $query->is_main_query() ) {
$query->set( 'cat', '-1,-3' );
}
}
add_action( 'pre_get_posts', 'exclude_category' );
