<?php

/*
Plugin Name: Bootstrap for WordPress
Plugin URI: http://nickdimatteo.com
Description: Bootstrap for Wordpress Admin.
Author: Nick DiMatteo
Version: 1.0
Author URI: http://nickdimatteo.com
*/

function my_admin_head() {
        echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('css/bootstrap.css', __FILE__). '">';
        echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('css/admin-app.css', __FILE__). '">';
        
        echo '<script src="' .plugins_url('js/app.js', __FILE__). '">';
}

add_action('admin_head', 'my_admin_head');
remove_action('admin_print_styles', 'print_admin_styles', 20);

// this will remove the stylesheet when init fires
    add_action('admin_init','your_remove_default_stylesheets');
    // this is your function to deregister the default admin stylesheet
    function your_remove_default_stylesheets() {
    wp_deregister_style('wp-admin');
    wp_deregister_style('admin-bar');
    }
    
?>