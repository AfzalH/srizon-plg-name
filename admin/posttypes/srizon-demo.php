<?php
// Register Custom Post Type
function srizon_fb_video_post_type() {

	$labels  = array(
		'name'               => _x( 'Facebook Videos', 'Post Type General Name', 'srizon_fb_vid' ),
		'singular_name'      => _x( 'Facebook Video', 'Post Type Singular Name', 'srizon_fb_vid' ),
		'menu_name'          => __( 'Facebook Videos', 'srizon_fb_vid' ),
		'name_admin_bar'     => __( 'Facebook Videos', 'srizon_fb_vid' ),
		'parent_item_colon'  => __( 'Parent Item:', 'srizon_fb_vid' ),
		'all_items'          => __( 'All Items', 'srizon_fb_vid' ),
		'add_new_item'       => __( 'Add New Item', 'srizon_fb_vid' ),
		'add_new'            => __( 'Add New', 'srizon_fb_vid' ),
		'new_item'           => __( 'New Item', 'srizon_fb_vid' ),
		'edit_item'          => __( 'Edit Item', 'srizon_fb_vid' ),
		'update_item'        => __( 'Update Item', 'srizon_fb_vid' ),
		'view_item'          => __( 'View Item', 'srizon_fb_vid' ),
		'search_items'       => __( 'Search Item', 'srizon_fb_vid' ),
		'not_found'          => __( 'Not found', 'srizon_fb_vid' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'srizon_fb_vid' ),
	);
	$rewrite = array(
		'slug'       => '',
		'with_front' => true,
	);
	$args    = array(
		'label'               => __( 'Facebook Video', 'srizon_fb_vid' ),
		'description'         => __( 'Srizon Facebook Videos', 'srizon_fb_vid' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'srizon_fb_video', $args );

}

add_action( 'init', 'srizon_fb_video_post_type', 0 );

function srizon_fb_video_columns_header( $defaults ) {
	$defaults['shortcode'] = 'ShortCode';
	unset( $defaults['date'] );

	return $defaults;
}

function srizon_fb_video_columns_content( $column_name, $post_id ) {
	if ( $column_name == 'shortcode' ) {
		echo <<<END
<input type="text" value="[srizonytvid id={$post_id}]" name="shortcode-{$post_id}" />
END;

	}
}

add_filter( 'manage_srizon_fb_video_posts_columns', 'srizon_fb_video_columns_header' );
add_filter( 'manage_srizon_fb_video_posts_custom_column', 'srizon_fb_video_columns_content', 10, 2 );