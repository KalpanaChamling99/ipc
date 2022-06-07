<?php
/**
 * Banner
 *
 * @package ipc
 */
$default = ipc_get_default_theme_options();

$wp_customize->add_panel('Front_page_option_panel',
    array(
        'title' => esc_html__('Front Page Settings', 'ipc'),
        'priority' => 200,
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_section('banner_setting_options',
    array(
        'title' => esc_html__('Banner', 'ipc'),
        // 'priority' => 20,
        'capability' => 'edit_theme_options',
        'panel' => 'Front_page_option_panel',
    )
);

$wp_customize->add_setting('enable_banner_section',
    array(
        'default' => $default['enable_banner_section'],
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control('enable_banner_section',
    array(
        'label' => esc_html__('Enable Banner Section', 'ipc'),
        'section' => 'banner_setting_options',
        'type' => 'checkbox',
        // 'priority' => 22,

    )
);

$wp_customize->add_setting('banner_title',
    array(
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control( 'banner_title',
    array(
        'label'    => __( 'Section Title', 'ipc' ),
        'section'  => 'banner_setting_options',
        'type'     => 'text',
        'frontend_available'    => true,
        'separator'         => 'before',
    )
);
$wp_customize->add_setting('banner_description',
    array(
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control( 'banner_description',
    array(
        'label'    => __( 'Description', 'ipc' ),
        'section'  => 'banner_setting_options',
        'type'     => 'textarea',
        'frontend_available'    => true,
        'separator'         => 'before',
    )
);
$wp_customize->add_setting('banner_url',
    array(
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control( 'banner_url',
    array(
        'label'    => __( 'Youtube URL', 'ipc' ),
        'section'  => 'banner_setting_options',
        'type'     => 'text',
        'frontend_available'    => true,
        'separator'         => 'before',
    )
);



$wp_customize->add_setting('banner_image',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner_image', array(
    'label' => esc_html__( 'Image', 'ipc' ),
    'section' => 'banner_setting_options',
    'settings' => 'banner_image',
)));

