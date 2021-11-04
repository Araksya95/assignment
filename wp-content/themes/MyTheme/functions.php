<?php
function PREFIX_setup() {
    add_theme_support('html5', ['search-form', 'gallery', 'caption']);
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    register_nav_menus([
        // feel free to add/remove these menus per project needs
        'main'   => __('Main Menu',   'MyTheme'),
        'mobile' => __('Mobile Menu', 'MyTheme'),
        'footer' => __('Footer Menu', 'MyTheme'),
    ]);
}
add_action('after_setup_theme', 'PREFIX_setup');

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'poppins',      'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' );
    wp_enqueue_style( 'OwlCarousel2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'styles',       get_template_directory_uri(). '/dist/styles.css' );

    wp_enqueue_script( 'OwlCarousel2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-name', get_template_directory_uri(). '/dist/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


function create_reviews() {

    register_post_type( 'reviews',
        array(
            'labels' => array(
                'name' => __( 'Reviews' ),
                'singular_name' => __( 'Reviews' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'reviews'),
            'show_in_rest' => true,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

        )
    );
}
add_action( 'init', 'create_reviews' );
function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );

function general_settings() {
    // add theme general settings(for theme parts, eg. header, footer...)
    if(function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => __('Theme Settings', ''),
            'menu_title' => __('Theme Settings', ''),
            'menu_slug' => 'theme-settings',
            'capability' => 'edit_posts',
            //'redirect' => false
        ));

        acf_add_options_sub_page(array(
            'page_title' => __('General Settings', ''),
            'menu_title' => __('General', ''),
            'parent_slug' => 'theme-settings'
        ));
    }
}
add_action('init', 'general_settings');