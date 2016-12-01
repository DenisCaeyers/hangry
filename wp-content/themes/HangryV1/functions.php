<?php 

/* Register CSS */
function hangry1_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'hangry1_resources');

/* Register logo */
function theme_prefix_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 150,
        'width'       => 250,
        'flex-width' => true,
    ));
}

add_action( 'after_setup_theme', 'theme_prefix_setup' );


// Add Featured image thumbnail
function hangryv1_setup(){

    // Navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));

    add_theme_support('post-thumbnails');
    add_image_size('small-thumb', 180, 120, true);
    add_image_size('banner-image', 920, 210, true);
    add_image_size('cover-image', 650, 400, true);
}
add_action('after_setup_theme','hangryv1_setup')

?>