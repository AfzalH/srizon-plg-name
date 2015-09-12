<?php
add_action( 'cmb2_admin_init', 'srizon_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function srizon_register_demo_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_srizon_demo_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Test Metabox', 'cmb2' ),
		'object_types' => array( 'srizon_fb_video', ), // Post type
	) );

	$cmb_demo->add_field( array(
		'name' => __( 'Test Text', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'text',
		'type' => 'text_date',
	) );

	$cmb_demo->add_field(
		array(
			'name'       => __( 'Shortcode', 'cmb2' ),
			'desc'       => __( 'Shortcode Here' ),
			'id'         => $prefix . 'shortcode',
			'type'       => 'title',
			'default'    => 'shortcode here',
			'show_on_cb' => 'srizon_editing_post',
		)
	);

}

function srizon_editing_post() {
	if ( is_admin() ) {
		global $post;
		if ( $post->post_status == 'publish' ) {
			return true;
		}
	}

	return false;
}