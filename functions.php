<?php

if ( function_exists( 'add_theme_support' ) ) {

    // Add support for document title tag
    add_theme_support( 'title-tag' );

    // Add Thumbnail Theme Support
    add_theme_support( 'post-thumbnails' );
    // add_image_size( 'custom-size', 700, 200, true );

    // Add Support for post formats
    // add_theme_support( 'post-formats', ['post'] );
    // add_post_type_support( 'page', 'excerpt' );

    // Localisation Support
    load_theme_textdomain( 'sweza', get_template_directory() . '/languages' );
}

/**
 * Hide admin bar
 */

add_filter( 'show_admin_bar', '__return_false' );

/**
 * Remove junk
 */

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Enqueue scripts
 */

 function sweza_enqueue_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&display=swap', [], null);
    wp_register_script('custom_script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0' );
    wp_enqueue_script('custom_script');
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/style.css?' . filemtime( get_stylesheet_directory() . '/style.css' ) );
}

add_action( 'wp_enqueue_scripts', 'sweza_enqueue_scripts' );

function localize_script_variables() {
    $workArgs = array(
        'posts_per_page'   => -1,
        'post_type'        => 'artwork'
    );
    $the_work_query = new WP_Query( $workArgs );
    $artwork_count = $the_work_query->post_count;
    $videosArgs = array(
        'posts_per_page'   => -1,
        'post_type'        => 'videos'
    );
    $the_videos_query = new WP_Query( $videosArgs );
    $video_count = $the_videos_query->post_count;
    wp_localize_script( 'custom_script', 'php_vars', array( 
        'artwork_count' => $artwork_count,
        'video_count' => $video_count
    ) );
}
add_action( 'wp_enqueue_scripts', 'localize_script_variables' );