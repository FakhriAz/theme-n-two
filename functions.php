<?php
    // Theme support
    function n_two_theme_support() {
        // Nav menus    
        register_nav_menu(array(
            'primary'  =>__('Primary Menu'),
            'footer'   =>__('Footer Menu'), 
        ));
    }

    add_action( 'after_theme_setup ', 'n_two_theme_support' )


?>