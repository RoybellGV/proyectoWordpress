<?php 
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function load_assets()
{
    //load bootstrap
wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );
    
    
wp_enqueue_style('fontawesome_css', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
    
    //load style.css
wp_enqueue_style('style', get_stylesheet_uri());
    //load mdbootstrap
wp_enqueue_style('mdb.min', get_stylesheet_uri());
    
    //load jquery
wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
    
    //load bootstrap js
wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js'); 
}
add_action('wp_enqueue_scripts','load_assets');

//Load nav menu


register_nav_menus( array( 'primary' => __( 'Primary Menu', 'THEMENAME' ), ) ); 



?>
