<?php

    // Adding CSS and JS

    function utw_setup(){
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
        wp_enqueue_style('aos-animations-styles', get_theme_file_uri('/node_modules/aos/dist/aos.css'));
        wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
        wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
        wp_enqueue_script('font-awesome', '//kit.fontawesome.com/81df46cd00.js');
        wp_enqueue_script('aos-animations-scripts', get_theme_file_uri('/node_modules/aos/dist/aos.js'), NULL, microtime(), false);
    }

    add_action('wp_enqueue_scripts', 'utw_setup');

    // Adding WP features

    function utw_init(){
        add_theme_support('title-tag');
        //add_theme_support('html5'); Useless for now
    }

    add_action('after_setup_theme', 'utw_init');

?>