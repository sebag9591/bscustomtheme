<?php

function bscustom_styles() {
    
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'bscustom_styles');

function bscustom_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '3.3.6', true);
}

add_action('wp_enqueue_scripts', 'bscustom_scripts');

/** Nueva navegacion **/
register_nav_menus(
    array(
        'menu_principal' => __('Menú Principal', 'bscustom')
    )
);

function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'menu_principal' ) {
      // add the desired attributes:
      $atts['class'] = 'p-2 link-secondary';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );