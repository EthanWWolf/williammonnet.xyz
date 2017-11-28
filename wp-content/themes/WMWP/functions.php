<?php 

    /**
    * Add CSS
    */

    add_action('wp_enqueue_scripts', 'WMWP_insert_css_in_head');
    function WMWP_insert_css_in_head(){
        wp_enqueue_style('bootstrap.min', get_template_directory_uri().'/Bootstrap/dist/css/bootstrap.min.css');
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    /**
    * Add JS
    */

    add_action('wp_footer', 'WMWP_insert_js_in_footer');
    function WMWP_insert_js_in_footer(){
        wp_enqueue_script( 'jquery-3.2.1', 'https://code.jquery.com/jquery-3.2.1.js');
        wp_enqueue_script( 'popper.min', get_template_directory_uri().'/Bootstrap/assets/js/vendor/popper.min.js');
        wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/Bootstrap/dist/js/bootstrap.js');
        wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/JS/script.js', array('jquery'), false, true );
    }

    /**
    * Dequeue jQuery Migrate script in WordPress.
    */
    function WMWP_remove_jquery_migrate( &$scripts) {
        if(!is_admin()) {
            $scripts->remove( 'jquery');
            $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
        }
    }
    add_filter( 'wp_default_scripts', 'WMWP_remove_jquery_migrate' );
?>