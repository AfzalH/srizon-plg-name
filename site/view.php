<?php
add_filter( 'the_content', 'srizon_process_demo_type' );
function srizon_process_demo_type( $content ) {
	if ( get_post_type( get_the_ID() ) != 'srizon_fb_video' ) {
		return $content;
	}
	$prefix = '_srizon_demo_';
	$abcd   = get_post_meta( get_the_ID(), $prefix . 'text', true );

	return $content . $abcd;
}