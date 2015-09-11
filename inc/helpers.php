<?php
if(!function_exists('srizon_view')) {
	function srizon_view( $file ) {
		if ( is_file( $file ) ) {
			ob_start();
			include( $file );

			return ob_get_clean();
		}
	}
}