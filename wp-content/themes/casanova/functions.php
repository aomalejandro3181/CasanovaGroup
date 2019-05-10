<?php

    // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Casanova' ),
        'extra-menu' => __( 'Extra Menu' )
    ) );

    add_theme_support( 'menus' );
    
    /**
     * Function Register Jquery and Remove jQuery old.
     */
    function register_jquery()
    {
        if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
            wp_deregister_script('jquery');
            wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1');
            wp_enqueue_script('jquery');
        }
    }
    add_action('wp_enqueue_scripts', 'register_jquery');

    /**
     * Load Scripts
     */
    function load_scripts()
    {
        //loads js files
        wp_enqueue_script('bootstrap_js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
        wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '', true);

        wp_enqueue_script('basic_js', get_template_directory_uri() .'/js/basic.js', array('jquery'), '4.0.0', true);
        // Loads css files
        wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0');
        wp_enqueue_style('Material+Icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(),'');
        wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css', array(), '1');
    }
    add_action('wp_enqueue_scripts', 'load_scripts');

    /**
     * Remove load file wp-emoji.release.min.js
    */
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    add_image_size( 'small', 84, 68 );

    /**
     * Create a Directory name variable
     */
    if ( !defined('OP_DIRNAME') )
        define( 'OP_DIRNAME', get_theme_file_path() );

    /**
     * Import custom types and custom fields
     */
    require OP_DIRNAME . "/post-types/settings/settings.php";
