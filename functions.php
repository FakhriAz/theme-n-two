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
    }

    add_action('after_setup_theme', 'n_two_theme_support');


    // Widgets
    function n_two_init_widgets($id) {
        register_sidebar(array (
            'name'  => 'Archive Sidebar',
            'id'    => 'sidebar1',
            'before_widget' => '<div class="posts-archive-container">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="posts-archive-title">',
            'after_title' => '</h3>'
        ));
    }
    add_action( 'widgets_init', 'n_two_init_widgets' );
?>
