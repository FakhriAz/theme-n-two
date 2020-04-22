<?php
    // Theme support
    function n_two_theme_support() {
        //Support for featured image
        add_theme_support('post-thumbnails');

        // Nav menus    
        register_nav_menus(array(
            'primary'  => __('Primary Menu'),
            'footer'   => __('Footer Menu'), 
        ));

        // Posts format support
        add_theme_support('post-formats', array('aside', 'link','status'));
        // add_post_type_support( 'post', 'post-formats' );
        // add_post_type_support( 'page', 'post-formats' );
    }

    add_action('after_setup_theme', 'n_two_theme_support');

?>