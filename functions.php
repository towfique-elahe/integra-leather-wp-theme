<?php

    function firsttheme_theme_support(){
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme','firsttheme_theme_support');

    function integra_register_styles(){
        $version = wp_get_theme()->get('Version');

        wp_enqueue_style( 'integra-style', get_template_directory_uri(  ) . "/assets/css/theme.css", array(), $version, 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'integra_register_styles' );

    function integra_register_scripts() {
        wp_enqueue_script('integra-ionicon-module', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', array(), '7.1.0', true);
        wp_enqueue_script('integra-ionicon-nonmodule', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', array(), '7.1.0', true);
        wp_enqueue_script('integra-carousel', get_template_directory_uri() . '/assets/js/carousel.js', array(), '1.0', true);
        wp_enqueue_script('integra-mobileNav', get_template_directory_uri() . '/assets/js/mobileNav.js', array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'integra_register_scripts');

?>