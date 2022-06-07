<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ipc
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ipc_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'ipc_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function ipc_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'ipc_pingback_header' );

// CUTSOM PAGINATION
if ( ! function_exists( 'ipc_posts_custom_pagination' ) ) :
    /**
     * Posts navigation.
     *
     * @since 1.0.0
     */
    function ipc_posts_custom_pagination() {
		echo '<div class="ipc-pagination">';
			the_posts_pagination(array(
				'mid_size' => 4,
				'prev_text'          => '<i class="ion ion-md-arrow-back"></i>',
				'next_text'          => '<i class="ion ion-md-arrow-forward"></i>',
				'screen_reader_text' => '',
			));
		echo '</div>';
    }
endif;

add_action( 'ipc_action_posts_navigation', 'ipc_posts_custom_pagination' );
