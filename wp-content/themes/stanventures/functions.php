<?php


function mytheme_enqueue_styles() {

    wp_enqueue_style( 
        'main-style', 
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        time()   // Prevent cache during development
    );

}

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );


function mytheme_register_menus() {
    register_nav_menus( array(
        'header-menu' => __( 'Header Menu', 'mytheme' ),
    ));
}
add_action( 'init', 'mytheme_register_menus' );


function mytheme_custom_logo_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'mytheme_custom_logo_setup' );

function theme_header_button_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('header_button_section', array(
        'title'    => __('Header Button', 'yourtheme'),
        'priority' => 30,
    ));

    // Enable / Disable Option
    $wp_customize->add_setting('header_button_enable', array(
        'default' => '1',
    ));

    $wp_customize->add_control('header_button_enable', array(
        'label'   => __('Show Header Button', 'yourtheme'),
        'section' => 'header_button_section',
        'type'    => 'checkbox',
    ));

    // Button Text
    $wp_customize->add_setting('header_button_text', array(
        'default' => 'Get a Proposal',
    ));

    $wp_customize->add_control('header_button_text', array(
        'label'   => __('Button Text', 'yourtheme'),
        'section' => 'header_button_section',
        'type'    => 'text',
    ));

    // Button URL
    $wp_customize->add_setting('header_button_url', array(
        'default' => '#',
    ));

    $wp_customize->add_control('header_button_url', array(
        'label'   => __('Button URL', 'yourtheme'),
        'section' => 'header_button_section',
        'type'    => 'url',
    ));
}

add_action('customize_register', 'theme_header_button_customizer');


function mytheme_enqueue_scripts() {

    if (is_page()) {

        wp_enqueue_script(
            'ready-form-js',
            get_template_directory_uri() . '/assets/js/ready-form.js',
            array(),
            '1.0',
            true
        );

    }

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');




