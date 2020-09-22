<?php

add_theme_support('menus');
add_action( 'after_setup_theme', 'custom_logo_setup' );

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts','loadjs');
add_action('wp_enqueue_scripts','wpb_add_google_fonts');

register_nav_menus(
    array(
        'topMenu' => __('Top Menu','theme'),
        'footerMenu' => __('Footer Menu ','theme')
    )
);

function custom_logo_setup(){
    $defaults = array(
        'height' => 500,
        'width' => 800,
        'flex-width ' => true,
        'flex-height' => true,
    );
    add_theme_support('custom-logo',$defaults);
}

function bb_getLogo(){
    $custom_logo_id =  get_theme_mod( 'custom_logo' );
    
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'medium' );
    if ( has_custom_logo() ) {
            echo '<a class="" href="/">
            <img class="" src="' . $logo[0] . '" alt="' . get_bloginfo( 'name' ) . '">
            </a>';
    } else {
            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
    }
}

function load_stylesheets(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}

function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', false ); 
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway', false ); 
}

     


function include_jquery(){

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.5.1.min.js', '', 1, true);

    add_action('wp_enqueue_scripts','jquery');

}

function loadjs(){

    include_jquery();

    wp_register_script('mainjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('mainjs');
}
