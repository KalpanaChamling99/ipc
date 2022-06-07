<?php
/**
 * Default theme options.
 *
 * @package ipc
 */

if ( ! function_exists( 'ipc_get_default_theme_options' ) ) :

	/**
	 * Get default theme options
	 *
	 * @since 1.0.0
	 *
	 * @return array ipc theme options.
	 */
	function ipc_get_default_theme_options() {

		$default = array();

		// meta 
        $defaults['site_date_layout_option']		= 'in-time-span';
		
		// Banner
		$default['enable_banner_section']                         = '1';
        
		// Pass through filter.
		$default = apply_filters( 'ipc_filter_default_theme_options', $default );

		return $default;
	}

endif;
