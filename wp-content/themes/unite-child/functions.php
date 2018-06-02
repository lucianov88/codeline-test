<?php

function my_theme_enqueue_styles() {

    $parent_style = 'unite';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'unite-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function create_new_data_structures() {
    
    //1.4) add new type of post "Films". We need possibility to add new films.
    
    register_post_type('film', array(
        'labels' => array(
            'name' => __('Films'),
            'singular_name' => __('Film')
        ),
        'public' => true,
        'has_archive' => true,
            )
    );

    //1.5) Add following taxonimies to films: Genre, Country, Year and Actors
    //Genre
    $labels = array(
        'name' => _x('Genres', 'taxonomy general name', 'unite-child'),
        'singular_name' => _x('Genre', 'taxonomy singular name', 'unite-child'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'genre'),
    );

    register_taxonomy('genre', array('film'), $args);
    
    //Country
    $labels = array(
        'name' => _x('Countries', 'taxonomy general name', 'unite-child'),
        'singular_name' => _x('Country', 'taxonomy singular name', 'unite-child'),
    );

    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'country'),
    );

    register_taxonomy('country', array('film'), $args);
    
    //Years
    $labels = array(
        'name' => _x('Years', 'taxonomy general name', 'unite-child'),
        'singular_name' => _x('Year', 'taxonomy singular name', 'unite-child'),
    );

    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'year'),
    );

    register_taxonomy('year', array('film'), $args);
    
    //Actors
    $labels = array(
        'name' => _x('Actors', 'taxonomy general name', 'unite-child'),
        'singular_name' => _x('Actor', 'taxonomy singular name', 'unite-child'),
    );

    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'actor'),
    );

    register_taxonomy('actor', array('film'), $args);
}
add_action( 'init', 'create_new_data_structures' );
?>

