<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function ipc_widgets_init(){
    register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ipc' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ipc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
        array(
            'name'              => esc_html('Home page widget','ipc'),
            'id'                => 'homepage-widget',
            'description'       => esc_html('Add widget which will be shown in home page','ipc'),
            'before_widget'     => '<section id="%1$s" class="widget %2$s">',
            'after_widget'      => '</section>',
            'before_title'      => '<h2 class="widget-title">',
            'after_title'       => '</h2>'
        )
    );
}
add_action('widgets_init','ipc_widgets_init');

require get_template_directory().'/inc/widget/widget-base.php';
require get_template_directory().'/inc/widget/widgets.php';
