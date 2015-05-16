<?php 

function new_excerpt_more( $more ) {
	return;
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function courses() {
  $labels = array(
    'name'               => _x( 'Courses', 'post type general name' ),
    'singular_name'      => _x( 'Course', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'course' ),
    'add_new_item'       => __( 'Add New Course' ),
    'edit_item'          => __( 'Edit Course' ),
    'new_item'           => __( 'New Course' ),
    'all_items'          => __( 'All Courses' ),
    'view_item'          => __( 'View Course' ),
    'search_items'       => __( 'Search Courses' ),
    'not_found'          => __( 'No Courses found' ),
    'not_found_in_trash' => __( 'No Courses found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Course information',
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Courses',
    'public'        => true,
    'rewrite'       => array( 'slug' => 'courses', 'with_front' => false ),
    'menu_position' => 5,
    'supports'      => array( 'title', 'thumbnail' ),
    'has_archive'   => true,
  );
  register_post_type( 'courses', $args ); 
}
add_action( 'init', 'courses' );